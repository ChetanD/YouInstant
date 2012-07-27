<?php
	require "login.php";
	session_start();  
	if(isset($_SESSION['user'])){
		echo "user is logged in";
	}
	else{
		$login=new fblogin();
		$return12 = $login->login();
		$_SESSION['user']=$return12;
		echo $return12;
	}
	
    
    
?>