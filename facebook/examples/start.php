<?php
	require "login.php";
	session_start();  
    $fblogin=new fblogin();
	$r=$fblogin->login();
	return $r;  
    
    
?>