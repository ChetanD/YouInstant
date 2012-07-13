<?php
   $url = "http://google.com/complete/search?output=toolbar&q=india";
   		  $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_FAILONERROR,1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        $retValue = curl_exec($ch);                      
        curl_close($ch);
       // return $retValue;
        echo "demo".$retValue;
		printf($retValue);
?>