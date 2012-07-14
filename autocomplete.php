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
$info = curl_getinfo($ch);
echo $info;
 
?>