<?php

require_once '/home4/elect7wk/rapidexworldwide.com/admin/config/config1.php';
$db = getDbInstance();

/*get($tableName, $numRows = null, $columns = '*', $orderBy = '')*/
$country = $db->orderBy("id", "asc")->get("filter_country");

$old_c = $db->get("country");

$top_country = $db->get("`TABLE 36`");

/*$merge = array_merge($top_country, $country);*/

/*foreach($merge as $d){
    unset($d['id']);
    unset($d['created_at']);
    unset($d['updated_at']);
    $db = getDbInstance();
    $db->insert("filter_country",$d);
}*/
try {
    
    foreach($old_c as $c){
        foreach($country as $k){
            
            if(strtolower(trim($k['name']))==strtolower(trim($c['name']))){
                $db = getDbInstance();
                $db->where("id", $c['id'])->update("filter_country", array("code"=>$c['code'])));
                break;
            }  
        $s++;
            
        }
    $i++;
    }
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}
exit;
$normal = [];
$top = [];

try {
    $i = 1;
    foreach($country as $c){
        if(193 > $i){
            $normal[$i] = array("name"=>$c['name'], "code"=>$c['code']);
        }else {
            $top[$i] = array("name"=>$c['name'], "code"=>$c['code']);
        }
    $i++;
    }   
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}

try {
    foreach($top as $k){
        print_r($k);
        exit;
        $db = getDbInstance();
        if($db->insert("country", array("name"=>$c['name'], "code"=>$c['code']))){
            $db = getDbInstance();
            $db->where("id", $c['id'])->delete("country");   
        }else {
            echo "could not inesrt .". $c['code'];
        }
    }   
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}






