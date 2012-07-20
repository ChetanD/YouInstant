<?php
//http://www.recessframework.org/preview/content/files/recess-v0.20.tar.gz
//http://developer.echonest.com/api/v4/artist/suggest?api_key=4T42EAJNJSEO6NPVA&format=json&name=The&results=10
//http://www.tastekid.com/ask/ws/autocomplete?q=the+me&format=JSON&t=h tv shows
//http://www.tastekid.com/ask/ws/autocomplete?q=jud&format=JSON&t=s music
//http://www.tastekid.com/ask/ws/autocomplete?q=jud&format=JSON&t=s books
//http://www.tastekid.com/ask/ws/autocomplete?q=jud&format=JSON&t=s movies
//header('Content-type: application/json');
if (isset($_REQUEST["q"]) && isset($_REQUEST["c"])) {

	if ($_REQUEST["q"] == "") {
		$str = "not found";
		$str = json_encode($str);
		echo "[".$str."]";
		return;
	}
	
	$term = trim(strtolower($_REQUEST['q']));
	$url = str_replace(array(" ", "(", ")"), array("_", "", ""), $term);
	require 'functions.php';
	$youtube = new youtube();
	$data = $youtube->get($url);
	$arr = json_decode($data, true);
	echo "[\"$url\",[";
			$c = count($arr[1]);
			$i = 1;
			foreach($arr[1] as $item) {
				echo "\"".$item[0]."\"";
					if ($i < $c) {
						echo ",";
					}
					$i++;
			}
			echo "]]";
			break;
	

} else {
	$str = "not found";
	$str = json_encode($str);
	echo "[".$str."]";
}

?>