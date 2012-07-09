<?php 
        session_start(); 
     
        if(isset($_SESSION["count"])) { 
            $accesses = $_SESSION["count"] + 1; 
        } else { 
            $accesses = 1; 
        } 
    
       $_SESSION["count"] = $accesses;
       echo $_SESSION["count"]; 
   ?> 
  <html> 
  <head> 
  <title>Access counter</title> 
  </head> 
   
  <body> 
  <h1>Access counter</h1> 
   
  <p>You have accessed this page <?php echo $accesses; ?> times today.</p> 
   
  <p>[<a href="counter.php">Reload</a>]</p> 
  </body> 
 </html> 