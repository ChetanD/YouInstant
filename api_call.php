<?php
    $apiKey = "xxxx";
    
    /**
     * Checks whether the call to the API returned an error
     *
     * @param SimpleXMLElement $xml
     */
    function api_call_returned_error($xml) {
        return (string) $xml["stat"] == "fail";
    }
?>

<html>
  <head>
    <title>Example using World Bank API</title>
  </head>
  <body>    
    <?php
      // set url to make country query into the API
      $url = "http://open.worldbank.org/rest.php?method=wb.countries.get&per_page=250";
      
	  
      // make the call to the API, which returns valid XML
      $xml = simplexml_load_file($url);
      echo  $xml;
      // check if the API call failed
      if(api_call_returned_error($xml)) {
        echo "Could not fetch country list. Error #" . $xml->err["code"] . " - " . $xml->err["msg"];
      }
	  else {
	  	echo $_REQUEST["country"];
		  foreach($xml->countries->country as $country) {
		  	 
	        if($country["id"] == $_REQUEST["country"]) {
	          echo '<option value="' . $country["id"] . '" SELECTED>' . $country->name . '</option>';
	        }
	        else {
	          echo '<option value="' . $country["id"] .'">' . $country->name . '</option>';
	        }                        
      }
	  }
    ?>
  </body>
</html>