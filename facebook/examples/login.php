<?php
    
    require '../src/facebook.php';
    
    
	
	   	
		 
	   	$facebook = new Facebook(array(
		  'appId'  => '466365946708375',
		  'secret' => '34a29438c975ec9ded7684ce5d8cf0a1',
		  'req_perms' => 'publish_stream',
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
		else{
			
		}
		
		if ($user) {
		  $logoutUrl = $facebook->getLogoutUrl();
		} else {
		  $params = array(
		  scope => 'user_photos,friends_photos'
		  
		);	
		  $loginUrl = $facebook->getLoginUrl($params);
		  
		}
	
		
	
		
    
?>

<html>
	<head>
		<title>demo</title>
	</head>
	<body>
	<?php if(!$user)
	{
		?>	
		<a href="<?php echo $loginURL?>"><?php echo $loginURL ?></a>
	<?php
	}
		else
			{
				echo "u r logged in";
			} 
	?>	
	</body>
</html>