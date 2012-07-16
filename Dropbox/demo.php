<?php
    require 'dropboxoauth.php';
	$consumer_key="6e6z7auri0u0rct";
	$consumer_secret="kclsoe4oged57d7";
	$callback_url="https://api.dropbox.com/1/oauth/request_token";
	$oauth = new DropboxOAuth($consumer_key,$consumer_secret);

	$request = $oauth->getRequestToken($callback_url);
   
	$url = $oauth->getAuthorizeURL($request);
	echo $request["oauth_token"];
	$oauth=new DropboxOAuth($consumer_key,$consumer_secret,$request['oauth_token'],$request['oauth_token_secret']);
	$token=$oauth->getAccessToken();
	echo $token;
	
	
?>