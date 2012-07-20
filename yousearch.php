<?php

class seayoutube{
	public function get($q){
		$q=str_replace(" ", "/", $q);
	   $feedURL = "http://gdata.youtube.com/feeds/api/videos/-/".$q."?orderby=viewCount&max-results=1";
	   $sxml = simplexml_load_file($feedURL);
	   foreach ($sxml->entry as $entry) {
		  $id=$entry->id;
		  $demo=(string)$id;
		  $demo1=explode("/", $demo);
		  
		  
		  //http://www.youtube.com/embed/dP15zlyra3c?html5=1
		  $embededlink="http://www.youtube.com/embed/".$demo1[count($demo1)-1]."?autoplay=1&html5=1";
		  $ret=$embededlink."~".$_REQUEST["count"];
	      echo $ret;	
		}
    }
}
    
?>