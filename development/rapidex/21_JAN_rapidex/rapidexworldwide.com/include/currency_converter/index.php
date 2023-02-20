<?php
require_once  "vendor/autoload.php";
$client = new \GuzzleHttp\Client(array( 'curl' => array(CURLOPT_SSL_VERIFYPEER => false)));
$from = trim(strtolower($_GET['from']));
$to = trim(strtolower($_GET['to']));
$response = $client->request('GET', 'https://www.google.com/search?q='.$from.'+to+'.$to.'');
//$response = $client->request('GET', 'https://books.toscrape.com/');
$htmlString = (string) $response->getBody();
libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->loadHTML($htmlString);
$xpath = new DOMXPath($doc);
$titles = $xpath->evaluate('//div[@class="BNeawe iBp4i AP7Wnd"]//div[@class="BNeawe iBp4i AP7Wnd"]');
foreach ($titles as $key => $title) {
    echo ( (float)filter_var($title->textContent, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) ); // float(55.35)
}
