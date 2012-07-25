<?php
    
    require '../src/facebook.php';
    class fblogin{
    
	   public function login(){
	   	$facebook = new Facebook(array(
		  'appId'  => '466365946708375',
		  'secret' => '34a29438c975ec9ded7684ce5d8cf0a1',
		  'req_perms' => 'publish_stream,user_photos,friends_photos',
		));
		
		$user = $facebook->getUser();
		if ($user) {
		  try {
		    // Proceed knowing you have a logged in user who's authenticated.
		    $user_profile = $facebook->api('/me');
		  } catch (FacebookApiException $e) {
		    error_log($e);
		    $user = null;
		  }
		}
		
		if ($user) {
		  $logoutUrl = $facebook->getLogoutUrl();
		} else {
		  $params = array(
		  scope => 'user_photos,friends_photos'
		  
		);	
		  $loginUrl = $facebook->getLoginUrl($params);
		}
		
		return $user;
	   }	
    }
?>