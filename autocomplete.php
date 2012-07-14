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
 

 $response =file_get_contents($url);
 $response=var_dump($response);
 echo $response[0];
 */
$userAgent =  "Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0";
$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Accept-Encoding: gzip, deflate";
	$header[] = "Connection: keep-alive";
	
 $ch = curl_init('www.google.com');
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $url);
	
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
	return $data;
?>