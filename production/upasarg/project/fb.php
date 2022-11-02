<?php 

require_once dirname(__FILE__) . '/config/common.php';

if (isset($_SESSION['id']) || isset($_SESSION['facebookToken'])) {
    redirectPage($routes['base']);
}

$facebook = require_once $config['paths']['helpers'] . '/facebook.php';
$facebookHelper = $facebook->getRedirectLoginHelper();

try {
	if (isset($_GET['state'])) {
		$facebookHelper->getPersistentDataHandler()->set('state', $_GET['state']);
    }

	$facebookToken = $facebookHelper->getAccessToken();
} catch(Facebook\Exceptions\facebookResponseException $e) {
	echo 'Response: ' . $e->getMessage() . "\n";
	echo 'Response Line: ' . $e->getLine() . "\m";
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo 'SDK: ' . $e->getMessage() . "\n";
	echo 'SDK Line: ' . $e->getLine() . "\m";
	exit;
}

if (false === isset($facebookToken)) {
	if ($facebookHelper->getError()) {
		header(sprintf('%s 401 Unauthorized', $_SERVER['SERVER_PROTOCOL']));
		echo "Error: " . $facebookHelper->getError() . "\n";
		echo "Error Code: " . $facebookHelper->getErrorCode() . "\n";
		echo "Error Reason: " . $facebookHelper->getErrorReason() . "\n";
		echo "Error Description: " . $facebookHelper->getErrorDescription() . "\n";
	} else {
		header(sprintf('%s Bad Request', $_SERVER['SERVER_PROTOCOL']));
		echo 'Bad Request';
	}
	exit;
}

$facebookOauth = $facebook->getOAuth2Client();
$facebookMetadata = $facebookOauth->debugToken($facebookToken);
$facebookMetadata->validateAppId(FACEBOOK_CLIENT_ID);
$facebookMetadata->validateExpiration();

if (!$facebookToken->isLongLived()) {
	try {
		$facebookToken = $facebookOauth->getLongLivedAccessToken($facebookToken);
	} catch (Facebook\Exceptions\FacebookSDKException $e) {
		echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
		exit;
	}
}

$_SESSION['facebookToken'] = (string)$facebookToken;
$facebook->setDefaultAccessToken($_SESSION['facebookToken']);

$facebookRequestProfile = $facebook->get('/me?fields=first_name,last_name,email');
$facebookRequestPicture = $facebook->get('/me/picture?redirect=false&height=200'); //getting user picture
$facebookProfile = $facebookRequestProfile->getGraphUser();
$facebookPicture = $facebookRequestPicture->getGraphUser();

$facebookEmail = $facebookProfile->getProperty('email');
$facebookFname = $facebookProfile->getProperty('first_name');
$facebookLname = $facebookProfile->getProperty('last_name');
$facebookPhoto = $facebookPicture['url'];

if (empty($facebookEmail)) {
    unset($_SESSION['facebookToken']);
    throw new Exception('Email is empty');
}
	
$dbResult = $objDb->select('SELECT user_id, user_fname, user_lname, user_photo
                            FROM se_users
                            WHERE user_email = :user_email', array(':user_email' => $facebookEmail));

if (!isset($dbResult[0]['user_id'])) {
    $data = array(':user_email' =>$facebookEmail);
    $fields = array('user_email');
    $values = array(':user_email');

    $_SESSION['email'] = $facebookEmail;
    if (false === empty($facebookFname)) {
        $_SESSION['fname'] = $facebookFname;
        $data[':user_fname'] = $facebookFname;
        $fields[] = 'user_fname';
        $values[] = ':user_fname';
    }
    
    if (false === empty($facebookLname)) {
        $_SESSION['lname'] = $facebookLname;
        $data[':user_lname'] = $facebookLname;
        $fields[] = 'user_lname';
        $values[] = ':user_lname';
    }
    
    if (false === empty($facebookPhoto)) {
        $_SESSION['photo'] = $facebookPhoto;
        $data[':user_photo'] = $facebookPhoto;
        $fields[] = 'user_photo';
        $values[] = ':user_photo';
    }
    $_SESSION['premium_user'] = FALSE;

    $objDb->insert('INSERT INTO se_users(' . implode(',', $fields) . ') VALUES (' . implode(',', $values) . ')', $data);
    $user_id = $objDb->lastInsertId();
    if ($user_id <= 0) {
        unset($_SESSION['facebookToken'], $_SESSION['fname'], $_SESSION['lname'], $_SESSION['photo']);
        throw new Exception('Insert database failed');
    }
    
    $_SESSION['id'] = $user_id;
    $_SESSION['credits'] = 0;
    
} else {
    $_SESSION['id'] = $dbResult[0]['user_id'];
    $_SESSION['credits'] = $dbResult[0]['credits'];
    $sql = array();
    $data = array();

    if (false === empty($dbResult[0]['user_fname'])) {
        $_SESSION['fname'] = $dbResult[0]['user_fname'];
    } elseif (false === empty($facebookFname)) {
        $_SESSION['fname'] = $facebookFname;
        $sql[] = 'user_fname = :user_fname';
        $data[':user_fname'] = $facebookFname;
    }
    
    if (false === empty($dbResult[0]['user_lname'])) {
        $_SESSION['lname'] = $dbResult[0]['user_lname'];
    } elseif (false === empty($facebookLname)) {
        $_SESSION['lname'] = $facebookLname;
        $sql[] = 'user_lname = :user_lname';
        $data[':user_lname'] = $facebookLname;
    }
    
    if (false === empty($dbResult[0]['user_photo'])) {
        $_SESSION['photo'] = $dbResult[0]['user_photo'];
    } elseif (false === empty($facebookPhoto)) {
        $_SESSION['photo'] = $facebookPhoto;
        $sql[] = 'user_photo = :user_photo';
        $data[':user_photo'] = $facebookPhoto;
    }
    
    if (false === empty($data)) {
        $data[':user_id'] = $_SESSION['id'];
        $objDb->update('UPDATE se_users SET ' . implode(',', $sql) . '
                        WHERE user_id = :user_id', $data);
    }

    $dbResult = $objDb->select('SELECT * FROM payment_order
                    WHERE user_id = :user_id
                    AND status = "active"', array(':user_id' => $_SESSION['id']));
    if (empty($dbResult[0]['user_id'])) {
        $_SESSION['premium_user'] = FALSE;
    }
    else {
        $_SESSION['premium_user'] = TRUE;
        $_SESSION['premium_upto'] = $dbResult[0]['date_sub_end'];
    }

}

redirectPage($routes['base']);

