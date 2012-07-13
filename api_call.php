<?php
	$apiKey = "xxxxx";
	
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
      $url = "http://api.worldbank.org/country?per_page=10";
      
      // make the call to the API, which returns valid XML
      $xml = simplexml_load_file($url);
      
      // check if the API call failed
      if(api_call_returned_error($xml)) {
        echo "Could not fetch country list. Error #" . $xml->err["code"] . " - " . $xml->err["msg"];
      }
		?>
		<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
			<b>Select A Country: </b><select name="country">
				<?php				
					foreach($xml->countries->country as $country) {
						if($country["id"] == $_REQUEST["country"]) {
							echo '<option value="' . $country["id"] .'" SELECTED>' . $country->name . '</option>';
						}
						else {
							echo '<option value="' . $country["id"] .'">' . $country->name . '</option>';
						}						
					}
				?>
			</select>
			<input type="submit" value="Get Photos" />
		</form>
		<?php		
			if(count($_REQUEST) > 0) { // if the user submitted the form
				// set url to make photos query into the API, based on the country the user selected
				$url = "http://open.worldbank.org/rest.php?method=wb.photos.get&country=".$_REQUEST["country"]."&api_key=".$apiKey;
				$xml = simplexml_load_file($url); // make the call to the API, which returns valid XML
				if(api_call_returned_error($xml)) { // check if the API call failed
					echo "Could not fetch photos for " . $_REQUEST["country"] . ". Error #" . $xml->err["code"] . " - " . $xml->err["msg"];
				}
				
				if((integer) $xml->photos["total"] == 0) {
					echo "No photos found for " . $_REQUEST["country"] . ".";
				}
				else {
					// loop through photos returned					
					foreach($xml->photos->photo as $photo) {						
						echo "<a target='out' href='" . $photo->lowResURL . "'>"; // link to the higher resolution image
						echo "<img src='" . $photo->thumbURL . "' vspace='5' hspace='5' />"; // print the image to the screen
						echo "</a>";
					}					
				}
			}
		?>
	</body>
</html>