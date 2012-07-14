<?php
  $url = "http://google.com/complete/search?output=toolbar&q=india";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response =json_encode(curl_exec ($curl));
$geoloc = json_decode($response, true);
curl_close ($curl);
echo "demo:".$geoloc;
$rxml = simplexml_load_string($response);
echo $rxml;
 /* 
 * 
 
$url = 'http://api.flickr.com/services/xmlrpc/';
$ch = curl_init($url);
 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($ch);
curl_close($ch);echo $response;
 * 

 $xml_data = 'foobar%';

$URL = "http://www.example.com/api/foobar.xml";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/html'));
curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
$output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

print_r($info);
print_r($output);
*/
?>