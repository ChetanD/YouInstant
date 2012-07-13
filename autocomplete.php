<?php
   $url = "http://google.com/complete/search?output=toolbar&q=india";
 //  		  $ch = curl_init();
 //       curl_setopt($ch, CURLOPT_URL,$url);
 //       curl_setopt($ch, CURLOPT_FAILONERROR,1);
 //       curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
 //       curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 //       curl_setopt($ch, CURLOPT_TIMEOUT, 15);
 // /      $retValue = curl_exec($ch);                      
 //       curl_close($ch);
 //      // return $retValue;
 //      $xml = new SimpleXMLElement($retValue);
 // echo $xml->toplevel->CompleteSuggestion[0]->suggestion['data'];
 //       echo "demo".$retValue;
//		printf($retValue);
$r = new HttpRequest($url, HttpRequest::METH_GET);
//$r->setOptions(array('lastmodified' => filemtime('local.rss')));
//$r->addQueryData(array('category' => 3));
try {
    $r->send();
    if ($r->getResponseCode() == 200) {
   //     file_put_contents('local.rss', $r->getResponseBody());
         echo $r->getResponseBody();
    }
} catch (HttpException $ex) {
    echo $ex;
}
?>