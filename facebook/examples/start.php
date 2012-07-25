<?php
   require "login.php";
    if(isset($_REQUEST['user'])){
    	
    }
	else {
	 $fblogin = new fblogin();
	 $user = $fblogin->login();
	 echo $user;				
   }
?>