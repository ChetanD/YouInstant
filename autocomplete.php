<?php
   $url = "http://google.com/complete/search?output=toolbar&q=india";
$ch = curl_init(); // initialize curl handle 
curl_setopt($ch, CURLOPT_VERBOSE, 1); // set url to post to 
curl_setopt($ch, CURLOPT_URL, $url); // set url to post to 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // return into a variable 
curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml")); 
curl_setopt($ch, CURLOPT_HEADER, 1); 
curl_setopt($ch, CURLOPT_TIMEOUT, 40); // times out after 4s 
curl_setopt($ch, CURLOPT_POSTFIELDS, $XPost); // add POST fields 
curl_setopt($ch, CURLOPT_POST, 1); 
$result = curl_exec($ch); // run the whole process 
echo $result;
?>