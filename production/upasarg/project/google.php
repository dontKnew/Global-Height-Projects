<?php 

require_once dirname(__FILE__) . '/config/common.php';

if (isset($_SESSION['id'])) {
    redirectPage($routes['base']);
}

try {
    $googleClient = require_once $config['paths']['helpers'] . '/google.php';

    if (false === isset($_SESSION['googleToken'])) {
		if (false === isset($_GET['code']))
			throw new Exception('Something wrong with Google login, please try another login method');
		$token = $googleClient->fetchAccessTokenWithAuthCode($_GET['code']);
		if (false === isset($token['access_token']))
			throw new Exception('Something wrong with Google login, please try another login method');
		$_SESSION['googleToken'] = $token['access_token'];
	}
	$googleClient->setAccessToken($_SESSION['googleToken']);
	$googleOauth = new Google_Service_Oauth2($googleClient);
	$profile = $googleOauth->userinfo->get();
	
	if (empty($profile->email))
		throw new Exception('Something wrong with Google login, please try another login method');

	$dbResult = $objDb->select('SELECT user_id, user_fname, user_lname, user_photo
                    FROM se_users
                    WHERE user_email = :user_email LIMIT 1', array(':user_email' => $profile->email));

	if (!isset($dbResult[0]['user_id'])) {
        $fields = array('user_email');
        $values = array(':user_email');
		$data = array(':user_email' => $profile->email);

		$_SESSION['email'] = $profile->email;
		if (false === empty($profile->givenName)) {
			$_SESSION['fname'] = $profile->givenName;
			$data[':user_fname'] = $profile->givenName;
			$fields[] = 'user_fname';
			$values[] = ':user_fname';
		}
		
		if (false === empty($profile->familyName)) {
			$_SESSION['lname'] = $profile->familyName;
			$data[':user_lname'] = $profile->familyName;
			$fields[] = 'user_lname';
			$values[] = ':user_lname';
		}
		
		if (false === empty($profile->picture)) {
			$_SESSION['photo'] = $profile->picture;
			$data[':user_photo'] = $profile->picture;
			$fields[] = 'user_photo';
			$values[] = ':user_photo';
		}

        $objDb->insert('INSERT INTO se_users (' . implode(',', $fields) . ') VALUES(' . implode(',', $values) . ')', $data);
        $user_id = $objDb->lastInsertId();
		if ($user_id <= 0) {
			unset($_SESSION['fname'], $_SESSION['lname'], $_SESSION['photo']);
			throw new ErrorException('Insert new profile failed');
		}
		$_SESSION['credits'] = 0;
		$_SESSION['id'] = $user_id;
		$_SESSION['premium_user'] = FALSE;
	
	} else {
		$_SESSION['id'] = $dbResult[0]['user_id'];
//         $_SESSION['credits'] = $dbResult[0]['credits'];
		$sql = array();
		$data = array();
		
		if (false === empty($dbResult[0]['user_fname'])) {
			$_SESSION['fname'] = $dbResult[0]['user_fname'];
		} elseif (false === empty($profile->givenName)) {
			$_SESSION['fname'] = $profile->givenName;
			$sql[] = 'user_fname = :user_fname';
			$data[':user_fname'] = $profile->givenName;
		}
		
		if (false === empty($dbResult[0]['user_lname'])) {
			$_SESSION['lname'] = $dbResult[0]['user_lname'];
		} elseif (false === empty($profile->familyName)) {
			$_SESSION['lname'] = $profile->familyName;
			$sql[] = 'user_lname = :user_lname';
			$data[':user_lname'] = $profile->familyName;
		}
		
		if (false === empty($dbResult[0]['user_photo'])) {
			$_SESSION['photo'] = $dbResult[0]['user_photo'];
		} elseif (false === empty($profile->picture)) {
			$_SESSION['photo'] = $profile->picture;
			$sql[] = 'user_photo = :user_photo';
			$data[':user_photo'] = $profile->picture;
		}
		
		if (false === empty($data)) {
			$data[':user_id'] = $_SESSION['id'];
			$objDb->update('UPDATE se_users SET ' . implode(',', $sql) . '
                            WHERE user_id = :user_id', $data);
		}

// 		$dbResult = $objDb->select('SELECT * FROM payment_order
//                         WHERE user_id = :user_id
//                         AND status = "active"', array(':user_id' => $_SESSION['id']));
// 		if (empty($dbResult[0]['user_id'])) {
// 		    $_SESSION['premium_user'] = FALSE;
// 		}
// 		else {
// 		    $_SESSION['premium_user'] = TRUE;
// 		    $_SESSION['premium_upto'] = $dbResult[0]['date_sub_end'];
// 		}
	}

	redirectPage($routes['base']);

} catch (Exception $e) {
	$httpQuery = array();
	$httpQuery['status'] = 'warning';
	$httpQuery['message'] = $e->getMessage();
	$contentFile = 'oauth_error_tpl.php';
    require_once $config['paths']['config'] . '/exit.php';

} catch (ErrorException $e) {
	header(sprintf('%s 500 Internal Server Error', $_SERVER['SERVER_PROTOCOL']));
	echo $e->getMessage();
}
