<?php
if($_REQUEST['action']=="dhl_remote_area"){
    // test_link :  https://rapidexworldwide.com/include/api/charge.php?action=dhl_remote_area&enquiry_id=9545=&&network_id=2&country_code=ca&area=A0A%201E0
        require_once("/home4/elect7wk/rapidexworldwide.com/admin/config/config1.php");

        $network_id = intval(trim($_GET['network_id']));
        $_GET['country_code'] = strtolower($_GET['country_code']);
        $db = getDbInstance();
        $db->where("country_code", trim(strtolower($_GET['country_code'])));
        
        if($network_id == 2){
            $network_name = "DHL";
            $data = $db->getOne("dhl_remote_area_2022");
            $data = json_decode($data['remote_area'], true);      
        }else if($network_id == 11 || $network_id == 6)  {
            $network_name = "FEDEX";
            $data = $db->getOne("fedex_remote_area_2021");
            $data = str_replace(array('{', '}'), array('[', ']'), $data['remote_area']);
            $data = json_decode($data, true);
        }else {
            $network_name = "service not found";
        }
        $check = false;
        foreach($data as $area){
                
                $area_response = $area;
                
                $input = str_replace("%20"," ",strtolower(strval(trim($_GET['area']))));
                $string1 = strval(strtolower($area));
                // $string1 = strval(strtolower("A0G 1A0 - A0G 4Z9"));
                $arrStr = explode("-", $string1);
                $check_string = false;
                if(strtolower(trim($_GET['country_code']))=="jp"){
                      $check_string = true;
                    }else if($network_id==6 || $network_id==11) {
                        if(strpos($string1, "-") && !strpos($string1, ' ')){
                            $check_string = true;
                        }
                    }else { 
                        if(strpos($string1, ' ') &&  preg_match('/^[0-9 \-]+$/',$string1)){$check_string = true; }   
                    }
                
                if($network_id==6 && trim($_GET['country_code'])=="ca"){
                    $start = trim($arrStr[0]);
                    $end = trim($arrStr[1]);
                    $post_code_first = explode(" ", $start);
                    $input_post_code_first = explode(" ", $input);
                    if(trim($input_post_code_first[0]==trim($post_code_first[0]))){
                       for ($i = $start; $i <= $end; $i++) {
                            if(trim($i)==trim($input)){
                                $check = true;   
                                break;
                            }
                        }   
                    }
                }else {
                        if ($check_string===true) {
                            $arrStr = explode("-", $string1);
                            $arrStr = array_map("trim",$arrStr);
                            if(strtolower(trim($_GET['country_code']))=="jp" && $network_id==2 ){
                                if(strlen(trim($input))!==8){
                                    $check = false;
                                    break;
                                }
                            
                            $arrStr1 = explode("-", $input);
                            $input1  =intval($arrStr1[1]);
                            
                            $min = intval($arrStr[1]);
                            $max = intval($arrStr[3]);
                            if($arrStr1[0]== $arrStr[0] && isset($arrStr[3])) {
                                if(in_array($input1,range($min,$max),true)){ 
                                     $check = true;
                                     break;
                                }
                            }else {
                                if($arrStr[1]==$input1 && $arrStr1[0]== $arrStr[0]){
                                    $check  = true;
                                    break;
                                }
                                
                            }
                        }else {
                            if ((int)$input === (int)$arrStr[0] || (int)$input === (int)$arrStr[1]) {
                                $check = true;
                                break;
                            } else {
                                $string2 = intval($arrStr[0]) - intval($arrStr[1]);
                                $inc = abs($string2) - 1;
                                for($i=1; $i <= $inc; $i++){
                                    $remote_area = intval($arrStr[0])+$i;
                                    if($input==$remote_area){
                                        $check = true;
                                        break;
                                    }
                                }
                            }
    
                        }
                        
                    } else {
                        if(trim($input)==trim(strval($string1))){
                            $check = true;
                            break;
                        }else {
                            $check = false;
                        }
                    }   
                }
                
             if($check){
                 break;
             }   
        }
        if($check && $_GET['area']!==""){
            require_once("/home4/elect7wk/rapidexworldwide.com/admin/config/websconfig.php");
            $db1 = getDbInstanceWebs();
            $db1->where("id", trim($_GET['enquiry_id']));
            $data  = $db1->getOne("enquiry");
            $db1 = getDbInstanceWebs();
            $db1->where("id", trim($_GET['network_id']));
            $area  = $db1->getOne("company");
             if($data['weight'] < $data['weight_dm'] ){
                    $data['weight'] = $data['weight_dm'];
                }

            if($data['weight'] > 20 ){
                $area['remote_area_charge'] = $area['remote_area_charge']/$data['weight'];
                $kg = true;
            }else {
                $Kg = false;
            }

            $basic_charge = round($area['remote_area_charge'] +  $data['charges']);

            $gst_charge = round($basic_charge*0.18);
            $total_charge = round($basic_charge+$gst_charge);

            echo json_encode(array("remote_area"=>$check, "area_search"=>$area_response, "kg"=>$kg, "status"=>200, "message"=>$network_name."-Request successfully", "basic_charges"=>$basic_charge, "gst_charges"=>$gst_charge, "total_charges"=>$total_charge,  "remote_charges"=>$area['remote_area_charge']));
        }else {
            echo json_encode(array("remote_area"=>$check, "area_search"=>$area_response, "status"=>404, "message"=>$network_name. " - Remote Area Not Found"));
        }
 }
//  require_once("/home4/elect7wk/rapidexworldwide.com/admin/config/config.php");

//     $db1 = getDbInstance();
//     $area  = $db1->get("dhl_remote_area", null, "country_code");
//     foreach($area as $c){
//         $db1 = getDbInstance();

//         $data = $db1->where("iso2", $c['country_code']);
//         $area  = $db1->getOne("csc_country");

//         if(strtolower($area['iso2']) == strtolower($c['country_code'])){
//                 $db1 = getDbInstance();
//                 $enter['country_name'] = strtolower($area['name']);
//                 $db1->where("country_code", $c['country_code'])->insert("dhl_remote_area", $enter);
//             }

//         }

        // $db1 = getDbInstance();
        // $area  = $db1->get("dhl_remote_area", null, "country_code");

 function replace_spec_char($subject) {
    $char_map = array(
        "ъ" => "-", "ь" => "-", "Ъ" => "-", "Ь" => "-",
        "А" => "A", "Ă" => "A", "Ǎ" => "A", "Ą" => "A", "À" => "A", "Ã" => "A", "Á" => "A", "Æ" => "A", "Â" => "A", "Å" => "A", "Ǻ" => "A", "Ā" => "A", "א" => "A",
        "Б" => "B", "ב" => "B", "Þ" => "B",
        "Ĉ" => "C", "Ć" => "C", "Ç" => "C", "Ц" => "C", "צ" => "C", "Ċ" => "C", "Č" => "C", "©" => "C", "ץ" => "C",
        "Д" => "D", "Ď" => "D", "Đ" => "D", "ד" => "D", "Ð" => "D",
        "È" => "E", "Ę" => "E", "É" => "E", "Ë" => "E", "Ê" => "E", "Е" => "E", "Ē" => "E", "Ė" => "E", "Ě" => "E", "Ĕ" => "E", "Є" => "E", "Ə" => "E", "ע" => "E",
        "Ф" => "F", "Ƒ" => "F",
        "Ğ" => "G", "Ġ" => "G", "Ģ" => "G", "Ĝ" => "G", "Г" => "G", "ג" => "G", "Ґ" => "G",
        "ח" => "H", "Ħ" => "H", "Х" => "H", "Ĥ" => "H", "ה" => "H",
        "I" => "I", "Ï" => "I", "Î" => "I", "Í" => "I", "Ì" => "I", "Į" => "I", "Ĭ" => "I", "I" => "I", "И" => "I", "Ĩ" => "I", "Ǐ" => "I", "י" => "I", "Ї" => "I", "Ī" => "I", "І" => "I",
        "Й" => "J", "Ĵ" => "J",
        "ĸ" => "K", "כ" => "K", "Ķ" => "K", "К" => "K", "ך" => "K",
        "Ł" => "L", "Ŀ" => "L", "Л" => "L", "Ļ" => "L", "Ĺ" => "L", "Ľ" => "L", "ל" => "L",
        "מ" => "M", "М" => "M", "ם" => "M",
        "Ñ" => "N", "Ń" => "N", "Н" => "N", "Ņ" => "N", "ן" => "N", "Ŋ" => "N", "נ" => "N", "ŉ" => "N", "Ň" => "N",
        "Ø" => "O", "Ó" => "O", "Ò" => "O", "Ô" => "O", "Õ" => "O", "О" => "O", "Ő" => "O", "Ŏ" => "O", "Ō" => "O", "Ǿ" => "O", "Ǒ" => "O", "Ơ" => "O",
        "פ" => "P", "ף" => "P", "П" => "P",
        "ק" => "Q",
        "Ŕ" => "R", "Ř" => "R", "Ŗ" => "R", "ר" => "R", "Р" => "R", "®" => "R",
        "Ş" => "S", "Ś" => "S", "Ș" => "S", "Š" => "S", "С" => "S", "Ŝ" => "S", "ס" => "S",
        "Т" => "T", "Ț" => "T", "ט" => "T", "Ŧ" => "T", "ת" => "T", "Ť" => "T", "Ţ" => "T",
        "Ù" => "U", "Û" => "U", "Ú" => "U", "Ū" => "U", "У" => "U", "Ũ" => "U", "Ư" => "U", "Ǔ" => "U", "Ų" => "U", "Ŭ" => "U", "Ů" => "U", "Ű" => "U", "Ǖ" => "U", "Ǜ" => "U", "Ǚ" => "U", "Ǘ" => "U",
        "В" => "V", "ו" => "V",
        "Ý" => "Y", "Ы" => "Y", "Ŷ" => "Y", "Ÿ" => "Y",
        "Ź" => "Z", "Ž" => "Z", "Ż" => "Z", "З" => "Z", "ז" => "Z",
        "а" => "a", "ă" => "a", "ǎ" => "a", "ą" => "a", "à" => "a", "ã" => "a", "á" => "a", "æ" => "a", "â" => "a", "å" => "a", "ǻ" => "a", "ā" => "a", "א" => "a",
        "б" => "b", "ב" => "b", "þ" => "b",
        "ĉ" => "c", "ć" => "c", "ç" => "c", "ц" => "c", "צ" => "c", "ċ" => "c", "č" => "c", "©" => "c", "ץ" => "c",
        "Ч" => "ch", "ч" => "ch",
        "д" => "d", "ď" => "d", "đ" => "d", "ד" => "d", "ð" => "d",
        "è" => "e", "ę" => "e", "é" => "e", "ë" => "e", "ê" => "e", "е" => "e", "ē" => "e", "ė" => "e", "ě" => "e", "ĕ" => "e", "є" => "e", "ə" => "e", "ע" => "e",
        "ф" => "f", "ƒ" => "f",
        "ğ" => "g", "ġ" => "g", "ģ" => "g", "ĝ" => "g", "г" => "g", "ג" => "g", "ґ" => "g",
        "ח" => "h", "ħ" => "h", "х" => "h", "ĥ" => "h", "ה" => "h",
        "i" => "i", "ï" => "i", "î" => "i", "í" => "i", "ì" => "i", "į" => "i", "ĭ" => "i", "ı" => "i", "и" => "i", "ĩ" => "i", "ǐ" => "i", "י" => "i", "ї" => "i", "ī" => "i", "і" => "i",
        "й" => "j", "Й" => "j", "Ĵ" => "j", "ĵ" => "j",
        "ĸ" => "k", "כ" => "k", "ķ" => "k", "к" => "k", "ך" => "k",
        "ł" => "l", "ŀ" => "l", "л" => "l", "ļ" => "l", "ĺ" => "l", "ľ" => "l", "ל" => "l",
        "מ" => "m", "м" => "m", "ם" => "m",
        "ñ" => "n", "ń" => "n", "н" => "n", "ņ" => "n", "ן" => "n", "ŋ" => "n", "נ" => "n", "ŉ" => "n", "ň" => "n",
        "ø" => "o", "ó" => "o", "ò" => "o", "ô" => "o", "õ" => "o", "о" => "o", "ő" => "o", "ŏ" => "o", "ō" => "o", "ǿ" => "o", "ǒ" => "o", "ơ" => "o",
        "פ" => "p", "ף" => "p", "п" => "p",
        "ק" => "q",
        "ŕ" => "r", "ř" => "r", "ŗ" => "r", "ר" => "r", "р" => "r", "®" => "r",
        "ş" => "s", "ś" => "s", "ș" => "s", "š" => "s", "с" => "s", "ŝ" => "s", "ס" => "s",
        "т" => "t", "ț" => "t", "ט" => "t", "ŧ" => "t", "ת" => "t", "ť" => "t", "ţ" => "t",
        "ù" => "u", "û" => "u", "ú" => "u", "ū" => "u", "у" => "u", "ũ" => "u", "ư" => "u", "ǔ" => "u", "ų" => "u", "ŭ" => "u", "ů" => "u", "ű" => "u", "ǖ" => "u", "ǜ" => "u", "ǚ" => "u", "ǘ" => "u",
        "в" => "v", "ו" => "v",
        "ý" => "y", "ы" => "y", "ŷ" => "y", "ÿ" => "y",
        "ź" => "z", "ž" => "z", "ż" => "z", "з" => "z", "ז" => "z", "ſ" => "z",
        "™" => "tm",
        "@" => "at",
        "Ä" => "ae", "Ǽ" => "ae", "ä" => "ae", "æ" => "ae", "ǽ" => "ae",
        "ĳ" => "ij", "Ĳ" => "ij",
        "я" => "ja", "Я" => "ja",
        "Э" => "je", "э" => "je",
        "ё" => "jo", "Ё" => "jo",
        "ю" => "ju", "Ю" => "ju",
        "œ" => "oe", "Œ" => "oe", "ö" => "oe", "Ö" => "oe",
        "щ" => "sch", "Щ" => "sch",
        "ш" => "sh", "Ш" => "sh",
        "ß" => "ss",
        "Ü" => "ue",
        "Ж" => "zh", "ж" => "zh",
    );
    return strtr($subject, $char_map);
}


 if($_REQUEST['action']=="get_city"){
        require_once("/home4/elect7wk/rapidexworldwide.com/admin/config/config1.php");
        $db = getDbInstance();

        $state = str_replace("%20", " ", trim(ucwords($_GET['state'])));
        $data = $db->where("name", $state)->getOne("csc_state");

        $city = $db->where("state_id", $data['id'])->get("csc_city", null, "name");

        $city_option = '<option value="">Select City</option>';
        foreach($city as $name){
            $city_option.="<option value='".replace_spec_char($name['name'])."'>".replace_spec_char($name['name'])."</option>";
        }
        $city =   json_encode($city_option, true);
        echo json_encode(array("status"=>200, "city"=>$city_option, "message"=>"All City has been got it!"));
 }


 /*if($_REQUEST['action']=="get_city"){
        require_once("/home4/elect7wk/rapidexworldwide.com/admin/config/config1.php");
        $db = getDbInstance();

        $state = str_replace("%20", " ", trim(ucwords($_GET['state'])));
        $data = $db->where("name", $state)->getOne("csc_state");

        $city = $db->where("state_id", $data['id'])->get("csc_city", null, "name");

        function cleanString($text) {
                $utf8 = array(
                    '/[áàâãªäā]/u'   =>   'a',
                    '/[ÁÀÂÃÄ]/u'    =>   'A',
                    '/[ÍÌÎÏ]/u'     =>   'I',
                    '/[íìîï]/u'     =>   'i',
                    '/[éèêë]/u'     =>   'e',
                    '/[ÉÈÊË]/u'     =>   'E',
                    '/[óòôõºöō]/u'   =>   'o',
                    '/[ÓÒÔÕÖ]/u'    =>   'O',
                    '/[úùûü]/u'     =>   'u',
                    '/[ÚÙÛÜ]/u'     =>   'U',
                    '/ç/'           =>   'c',
                    '/Ç/'           =>   'C',
                    '/ñ/'           =>   'n',
                    '/Ñ/'           =>   'N',
                    '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
                    '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
                    '/[“”«»„]/u'    =>   ' ', // Double quote
                    '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
                );
                return preg_replace(array_keys($utf8), array_values($utf8), $text);
            }
        $city_option = '<option value="">Select City</option>';
        foreach($city as $name){
            $city_option.="<option value='".cleanString($name['name'])."'>".cleanString($name['name'])."</option>";
        }
        $city =   json_encode($city_option, true);
        echo json_encode(array("status"=>200, "city"=>$city_option, "message"=>"All City has been got it!"));
 }*/

if ($_REQUEST['mode']=="finalSubmitEF") {
    if (isset($_POST['g-recaptcha-response'])) {
        try {
            $data = ["secret" => "6LeLZhcjAAAAAE4p3vVhIgUJfGsmroBJ0xyH2hQ_", "response" => trim($_POST['g-recaptcha-response'])];
            $curl = curl_init();
            curl_setopt_array($curl, [CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify", CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => "", CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 30, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => "POST", CURLOPT_POSTFIELDS => $data,]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                echo json_encode(array("status"=>501,"Error"=>$err));
                exit;
            } else {
                $response = json_decode($response);
                if ($response->success) {
                    require_once("/home4/elect7wk/rapidexworldwide.com/admin/config/websconfig.php");
                    $db =  getDbInstanceWebs();
                    
                    $data = array_map("trim", $_POST);
                    $enquiry_id = $data['enquiry_id'];
                    unset($data['enquiry_id']);
                    unset($data['g-recaptcha-response']);
                    
                    $enquiry_sql = $db->where("id", $enquiry_id)->update("enquiry", $data);
                    if ($enquiry_sql) {
                        echo json_encode(array("status"=>200,"Error"=>"Data Success Fully Updated", "data"=>$enquiry_id ));
                        exit;
                    } else {
                        echo json_encode(array("status"=>501,"Error"=>"Could not insert data"));
                        exit;
                    }
                } else {
                    echo json_encode(array("status"=>301,"Error"=>"Invalid captcha verification, Please try again"));
                    exit;
                }
            }
        } catch (Exception $e) {
            echo json_encode(array("status"=>501,"Error"=>$e->getMessage()));
            exit;
        }
    }else {
        echo json_encode(array("status"=>300,"Error"=>"Captcha is required"));
        exit;
    }
}

if ($_REQUEST['mode']=="ShipperSubmitEF") {
    if (isset($_POST['g-recaptcha-response'])) {
        try {
            $data = ["secret" => "6LeLZhcjAAAAAE4p3vVhIgUJfGsmroBJ0xyH2hQ_", "response" => trim($_POST['g-recaptcha-response'])];
            $curl = curl_init();
            curl_setopt_array($curl, [CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify", CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => "", CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 30, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => "POST", CURLOPT_POSTFIELDS => $data,]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                echo json_encode(array("status"=>501,"Error"=>$err));
                exit;
            } else {
                $response = json_decode($response);
                if ($response->success) {
                    require_once("/home4/elect7wk/rapidexworldwide.com/admin/config/websconfig.php");
                    $db =  getDbInstanceWebs();
                    
                    $data = array_map("trim", $_POST);
                    $enquiry_id = $data['enquiry_id'];
                    unset($data['enquiry_id']);
                    unset($data['g-recaptcha-response']);
                    
                    $enquiry_sql = $db->where("id", $enquiry_id)->update("enquiry", $data);
                    if ($enquiry_sql) {
                        echo json_encode(array("status"=>200,"Error"=>"Data Success Fully Updated", "data"=>$enquiry_id ));
                        exit;
                    } else {
                        echo json_encode(array("status"=>501,"Error"=>"Could not insert data"));
                        exit;
                    }
                } else {
                    echo json_encode(array("status"=>301,"Error"=>"Invalid captcha verification, Please try again"));
                    exit;
                }
            }
        } catch (Exception $e) {
            echo json_encode(array("status"=>501,"Error"=>$e->getMessage()));
            exit;
        }
    }else {
        echo json_encode(array("status"=>300,"Error"=>"Captcha is required"));
        exit;
    }
}


 if($_REQUEST['mode']=="get_country"){
    require_once("/home4/elect7wk/rapidexworldwide.com/admin/config/config1.php");
    $db = getDbInstance();
    $city = $db->get("country");
    
    $city_option = '<option style="color:black" value="">-Select Country-</option>';
    foreach($city as $name){
        $city_option.="<option style='color:black' value='".$name['code']."'>".$name['name']."</option>";
        if(strtoupper($name['code'])=="CH"){
            $city_option.="<option value='' disabled>----------------------</option>";
        }
    }
    echo $city_option;
    
 }











