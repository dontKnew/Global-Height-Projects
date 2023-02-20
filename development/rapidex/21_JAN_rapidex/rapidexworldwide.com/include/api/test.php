<?php

require_once("/home4/elect7wk/rapidexworldwide.com/admin/config/config1.php");

$db = getDbInstance();
$data = $db->get("country");

foreach($data as $c){
    $db = getDbInstance();
    $db->where("name", ucwords($c['name']));
    $data1 = $db->getOne("country_webis", "*");

    if ($data1) {
        $db = getDbInstance();
        $db->where("id", ucwords($c['id']));
        $update = array(
            "code" => strtoupper($data1['code'])
        );
        $db->update("country", $update);
    }
}
