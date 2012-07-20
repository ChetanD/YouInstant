<?php
	
class google{
	public function get($q) {
	$connection_url="http://www.google.com/complete/search?client=firefox&hl=en&q=".$q;
	$userAgent =  "Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0"; 
	$cookie = "PREF=ID=b2f614ed985bc324:U=fdf291fc353eccea:FF=4:LD=en:CR=2:TM=1324025298:LM=1339316241:GM=1:IG=1:SG=1:ES=IPI:S=2rewdob8bfdX9d9O; NID=60=BZWuqmSPaNN2kq-en3dMAe7fpVshJnrkQtsZFpcokLF1zJMt3-jyJzBrR39KHEc_ntk2jDY1dlAhGQ86dv4ZqjIREFiq41pW5-GVO7sAZpjI84KyIaXol3u8K2b3UOwp6XMOL0Dl7L1t";
	$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Accept-Encoding: gzip, deflate";
	$header[] = "Connection: keep-alive";
	$ch = curl_init('www.google.com');
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $connection_url);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
	return $data;
	}
}

class bing{
	public function get($q) {
	$connection_url="http://api.bing.com/osjson.aspx?form=MOZSBR&pc=MOZI&query=".$q;
	$userAgent =  "Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0"; 
	$cookie = "SRCHD=MS=2149220&SM=1&D=2137950&AF=NOFORM; SRCHUSR=AUTOREDIR=0&GEOVAR=&DOB=20120124; MUID=1D643481FD1C6BD23C19364BFE1C6B2B; _FP=EM=22; KievRPSAuth=FAAqARRaTOJILtFsMkpLVWSG6AN6C/svRwNmAAAEgAAACOyC7vgScc326ADQVyqBs/xZPBD2Mc7Ab6orhn8rO3Dmxf%2BYcPKCrZDtnE8LU8Rvgys/wWtVzu2CdwdpMk9N9K91k8bDt/KTyygNT0lZ%2Bl7c4dqvK0H4F%2BQRruwVOV560hR1y43C5MXKt8vmG8EVnvwoCeP1iIyr0BVLYC3kOH/tjfXiQluLGzqpS/emAiga/LJIQ628AVrw2smtNX8RKZQDXq2UwJksl8gnRBPanR1YNu1OF8WZKQlfNI8o%2BbqqoC0MUESWJkU5ujdIl%2BvxTQJtTTBUQiYxS4VKWYmX1lYZABlwbp5DSvLcpunAGOgKDd/oFAAGH7opPUdfKOajMQFLLBPcpnyodA%3D%3D; PPLState=1; ANON=A=3B504DADC9E4D218A1377D2BFFFFFFFF&E=c3d&W=1; _SS=SID=04BFED035C844AB8BD8728109EFD7B60; SRCHS=PC=MOZI; RMS=F=OAAAE&A=a";
	$header[] = "Connection: keep-alive";
	$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Accept-Encoding: gzip, deflate";
	$ch = curl_init("api.bing.com");
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $connection_url);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
	return $data;
	}		
}

class yahoo{
	public function get($q) {
	$connection_url="http://ff.search.yahoo.com/gossip?output=fxjson&command=".$q;
	$userAgent =  "Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0"; 
	$cookie = "B=8kh6sr17eni12&b=4&d=pFyVaw1pYF7VOfmBPWpmiYV2eECESfJzv28PHZ4-&s=7e&i=.YGFIuJxjYMJtQW9xlht; YLS=v=1&p=1&n=0; F=a=O0yEQJgMvTYivIjuIkiQskKDPEVwpXPCueh6P.yiBgm6ZudJya6wH11gpOGmyEVt7PvKIcU-&b=8x6.; Y=v=1&n=8o81erqs7qc8q&l=i0d9kf0h34i78/o&p=m00vvin012000000&iz=411006&r=kc&lg=en-IN&intl=in; PH=l=en-IN&fn=P1bd_feJ29rLZe1p2mQ-&d=xYmePW1HAme8X6EdVDtA_mqUx_8-&s=vj&i=in; T=z=GUVrPBGo8vPBE0h6k7su9cTNk40MgYzTzM2NDFOMTc0MjAwMD&a=QAE&sk=DAANr.6YQFFaN4&ks=EAAizYn1QvOgEm9mP1NmqFg9w--~E&d=c2wBTVRrek5RRTBPRFF4TXpZNU5qQXpOVGMzTnpZeE1nLS0BYQFRQUUBZwFEM1BSRkdRT1RPRDVRUVdWN01JTE1FTFdDSQF0aXABcWsyYzZDAXp6AUdVVnJQQkE3RQ--&af=QXdBQjFDJnRzPTEzMzY3NTk1NTgmcHM9QkptN0tHcElPWWhqUG05c3hWUkxsQS0t; dt=bfHL080PPQ5wnFAuABmTBdzfVO4BqXhxPdE6RB1RSwdKgCg.0sxkBwJ9rvq0wWeR4JgFZYYr6wPxtLth.VANR0Yzkn7M.9nw7gucdlHWDo8QDWmy7Ow3MFGJVsG2j4DMfilwdVgOdKVnWw69ab4qtwaB27ybuZg3Z7khqxZwGESRBVDSxQQFgl9qVxgxsMBM9pIYrhRerItm0p5TNZdKix2STADM0Su9D.1hZQSIPjlZmpCLLItMWioYs9XTce3pfcoK.JaZK3oKk_fF7xt_Ag62X81uxmOd9Y5axnO7q3OuecJTXwjuL1AgKS8yj4fThLu05JsIYHQJmyGfNZ9OxTKc5odql_OoYE2NcnAik4FD3yX2mTBLBk_zEKBeI1qtyYrn3KJEkzfitD.m8careMFvKkiaHUZYI2wujVmnoXu7UeBzw1mf8E2Ol5uUgPjN6c1GCAHOUHUZBz3kRO3qmzKQNhuK0Pb2hbthY5TwVC5EKg--; U=mt=oihYQJ2MhYiL3S32cdpadu.M3DHfQpr042ySt2k-&ux=LuyNPB&un=8o81erqs7qc8q; ucs=ipv6=0";
	$header[] = "Connection: keep-alive";
	$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Accept-Encoding: gzip, deflate";
	$ch = curl_init("ff.search.yahoo.com");
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $connection_url);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
	return $data;
	}
}

class wikipedia{
	public function get($q) {
	$connection_url="http://en.wikipedia.org/w/api.php?action=opensearch&search=".$q;
	$userAgent =  "Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0"; 
	$cookie = "ext.articleFeedback@8-rated=true; mediaWiki.user.id=f35gh8JDIdmh5Vl6vgOlLLbY40FayvCq; mediaWiki.user.bucket:ext.articleFeedback-tracking=10%3Atrack; mediaWiki.user.bucket:ext.articleFeedback-options=8%3Ashow";
	$header[] = "Connection: keep-alive";
	$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Accept-Encoding: gzip, deflate";
	$ch = curl_init("en.wikipedia.org");
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $connection_url);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
	return $data;
	}
}

class imdb{
	public function get($q) {
	try {
	$firstC = $q[0];
	$connection_url="http://sg.media-imdb.com/suggests/$firstC/$q.json";
	$userAgent =  "Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0"; 
	$cookie = "";
	$header[] = "Connection: keep-alive";
	$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Accept-Encoding: gzip, deflate";
	$ch = curl_init("sg.media-imdb.com");
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $connection_url);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
		if (empty($data)) {
			throw new Exception("[\"error\"]");
		}
		return $data;
	} catch (Exception $e) {
			die($e->getMessage());
		}
}
	public function process($q) {
	try {
		$content = $this->get($q);
		if (empty($content)) {
			throw new Exception("[\"query returned no results\"]");
		}
		return $content;
	} catch (Exception $e) {
		die($e->getMessage());
	}
	}
} 

class youtube{
	public function get($q) {
	$connection_url="http://suggestqueries.google.com/complete/search?hl=en&ds=yt&client=youtube&hjson=t&q=".$q;
	$userAgent =  "Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0"; 
	$cookie = "PREF=ID=b2f614ed985bc324:U=fdf291fc353eccea:FF=4:LD=en:CR=2:TM=1324025298:LM=1339400080:GM=1:IG=1:SG=1:ES=IPI:S=ISCNWs8KKYY7rPKt; NID=60=BZWuqmSPaNN2kq-en3dMAe7fpVshJnrkQtsZFpcokLF1zJMt3-jyJzBrR39KHEc_ntk2jDY1dlAhGQ86dv4ZqjIREFiq41pW5-GVO7sAZpjI84KyIaXol3u8K2b3UOwp6XMOL0Dl7L1t; OGPERM=W6%3D0.0.1.976";
	$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Accept-Encoding: gzip, deflate";
	$header[] = "Connection: keep-alive";
	$ch = curl_init('suggestqueries.google.com');
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $connection_url);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
	return $data;
	}
}

class pages{
	public function get($q) {
	$connection_url="http://graph.facebook.com/search?type=page&until=&since=&offset=0&limit=10&method=get&pretty=0&sdk=joey&q=".$q;
	$userAgent =  "Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0"; 
	$cookie = "PREF=ID=b2f614ed985bc324:U=fdf291fc353eccea:FF=4:LD=en:CR=2:TM=1324025298:LM=1339400080:GM=1:IG=1:SG=1:ES=IPI:S=ISCNWs8KKYY7rPKt; NID=60=BZWuqmSPaNN2kq-en3dMAe7fpVshJnrkQtsZFpcokLF1zJMt3-jyJzBrR39KHEc_ntk2jDY1dlAhGQ86dv4ZqjIREFiq41pW5-GVO7sAZpjI84KyIaXol3u8K2b3UOwp6XMOL0Dl7L1t; OGPERM=W6%3D0.0.1.976";
	$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Accept-Encoding: gzip, deflate";
	$header[] = "Connection: keep-alive";
	$ch = curl_init('suggestqueries.google.com');
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $connection_url);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
	return $data;
	}
}

class books{
	public function get($q) {
	$connection_url="http://suggestqueries.google.com/complete/search?client=books&ds=bo&q=".$q;
	$userAgent =  "Mozilla/5.0 (Windows NT 5.1; rv:13.0) Gecko/20100101 Firefox/13.0"; 
	$cookie = "PREF=ID=b2f614ed985bc324:U=fdf291fc353eccea:FF=4:LD=en:CR=2:TM=1324025298:LM=1339400080:GM=1:IG=1:SG=1:ES=IPI:S=ISCNWs8KKYY7rPKt; NID=60=BZWuqmSPaNN2kq-en3dMAe7fpVshJnrkQtsZFpcokLF1zJMt3-jyJzBrR39KHEc_ntk2jDY1dlAhGQ86dv4ZqjIREFiq41pW5-GVO7sAZpjI84KyIaXol3u8K2b3UOwp6XMOL0Dl7L1t; OGPERM=W6%3D0.0.1.976";
	$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Language: en-us,en;q=0.5";
	$header[] = "Accept-Encoding: gzip, deflate";
	$header[] = "Connection: keep-alive";
	$ch = curl_init('suggestqueries.google.com');
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $connection_url);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
	return $data;
	}
}

class gmaps{
	public function get($q) {
		try {
	$connection_url="http://maps.google.com/maps/suggest?cp=999&hl=en-US&gl=en-US&v=2&json=b&num=10&q=".$q;
	$userAgent =  "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5"; 
	$cookie = "";
	$header[] = "Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$header[] = "Accept-Charset:ISO-8859-1,utf-8;q=0.7,*;q=0.3";
	$header[] = "Accept-Encoding:gzip,deflate";
	$header[] = "Cache-Control:max-age=0";
	$header[] = "Connection: keep-alive";
	$header[] = "Accept-Language:en-US,en;q=0.8";
	$ch = curl_init('maps.google.com');
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_URL, $connection_url);
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch,CURLOPT_ENCODING, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$data = curl_exec($ch);
		if(empty($data)) {
			throw new Exception("[\"error\"]");
		}
	return $data;
	
	  } catch (Exception $e) {
		die($e->getMessage());
	  }
	}
}

	function jsonp_decode($jsonp, $assoc = false) { // PHP 5.3 adds depth as third parameter to json_decode
		if($jsonp[0] !== '[' && $jsonp[0] !== '{') { // we have JSONP
			$jsonp = substr($jsonp, strpos($jsonp, '('));
		}
		return json_decode(trim($jsonp,'();'), $assoc);
	}
    function get_data($url) {
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

?>