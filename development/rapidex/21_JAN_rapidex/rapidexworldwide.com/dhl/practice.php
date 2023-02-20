<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api-eu.dhl.com/track/shipments?trackingNumber=1053973104",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"DHL-API-Key: ALncPKfCGMVpwc1Otibkux3hsphk8hoH" 
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>