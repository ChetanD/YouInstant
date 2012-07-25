<?php
   require "login.php";
    if(isset($_REQUEST['user'])){
    	
    }
	else {
		$google = new fblogin();
			$data = $google->login();
			echo $data;
	 }
?>