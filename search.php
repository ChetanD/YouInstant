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
	switch ($_REQUEST["c"]) {
		case 'g':
			$google = new google();
			$data = $google->get($url);
			echo $data;
			break;
		case 'b':
			$bing = new bing();
			$data = $bing->get($url);
			echo $data;
			break;
		case 'y':
			$yahoo = new yahoo();
			$data = $yahoo->get($url);
			$str = substr($data, 0 , -9);
			echo $str. "]";
			break;
		case 'w':
			$wikipedia = new wikipedia();
			$data = $wikipedia->get($url);
			echo $data;
			break;
		case 'fbp':
			$pages = new pages();
			$data = $pages->get($url);
			$arr = json_decode($data);
			$count1 = json_decode($data, true);
			$c = count($count1['data']);
			$i = 1;
			echo "[\"$url\",[";
			foreach($arr->data as $item) {
				echo "\"".$item->name."\"";
					if ($i < $c) {
						echo ",";
					}
					$i++;
			}
			echo "]]";
			break;
		case 'gb':
			$books = new books();
			$data = $books->get($url);
			$i = 0;
			var_dump(jsonp_decode($data, true));
			break;
		case 'yt':
			$youtube = new youtube();
			$data = $youtube->get($url);
			$arr = json_decode($data, true);

			$c = count($arr[1]);
			$i = 1;
			
			foreach($arr[1] as $item) {
				//echo $item[0];
					if ($i < $c) {
					//	echo ",";
					}
					if($i==1){
						$data=$item[0];
					}
					$i++;
			}
			require 'yousearch.php';
			$seayoutube = new seayoutube();
			$data = $seayoutube->get($data);
			echo $data;
			break;
		case 'gm':
			$gmaps = new gmaps();
			$data = $gmaps->get($url);
			$arr = json_decode($data);
			$i = 1;
			try{
			echo "[\"$url\",[";
				$c = count($arr->suggestion);
				if (empty($c)) {
					throw new Exception("[\"error occured\"]");
				}
			foreach($arr->suggestion as $item) {
				echo "\"".$item->query."\"";
				if ($i < $c) {
					echo ",";
				}
				$i++;
			}
			} catch (Exception $e) {
				die($e->getMessage());
			}
			echo "]]";
			break;
		case 'i':
			$imdb = new imdb();
			$data = $imdb->process($url);
			preg_match('/^imdb\$.*?\((.*?)\)$/ms', $data, $matches); //convert JSONP to JSON
			$json = $matches[1];
			$arr = json_decode($json);
			echo "[\"$url\",[";
			$c = count($arr->d);
			$i = 1;
			try {
				if (!$c) {
					throw new Exception("error occured");
				}
				foreach($arr->d as $item) {
					echo "\"".$item->l."\"";
					if ($i < $c) {
						echo ",";
						$i++;
					}
				}
			} catch (Exception $e) {
				die($e->getMessage());
			}
			echo "]]";
			break;
		default:
			print "c is undefined!";
	}

} else {
	$str = "not found";
	$str = json_encode($str);
	echo "[".$str."]";
}

?>