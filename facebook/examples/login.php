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
	    <?php if ($user): ?>
           <form method="post" action="">
           	  <input type="text" name="query"/>
      
           </form>
    <?php else: ?>
      <div>
        Login using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $loginUrl; ?>"><?php echo $loginUrl; ?></a>
      </div>
    <?php endif ?>
    
    <?php
       if ($_POST['query']): 
    ?>
      <p>yes</p>
    <?php else:?>
    	<p>no</p>
    <?php endif ?>	  
	</body>
</html>