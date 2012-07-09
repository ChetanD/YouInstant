<?php
        echo "demo";  
        session_start(); 
     
        if(isset($_SESSION["count"])) { 
            $accesses = $_SESSION["count"] + 1; 
        } else { 
            $accesses = 1; 
        } 
    
       $_SESSION["count"] = $accesses;
       echo $_SESSION["count"]; 
   ?> 
