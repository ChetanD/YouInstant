<?php
  $url = "http://google.com/complete/search?output=toolbar&q=india";

/*$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response =(curl_exec ($curl));

curl_close ($curl);
echo "demo:".$response;
//$rxml = simplexml_load_string($response);
$info = curl_getinfo($ch);
echo $info;*
 * 
 */

 $response =file_get_contents($url);
 $response=var_dump($response);
 echo $response[0];
 
?>