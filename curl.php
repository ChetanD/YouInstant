<?php import_request_variables("pg", "form_");
    echo $form_begin;
 ?>
<html> 
<head> 
<title>Generate Random Number</title> 
</head> 

<body> 
<p>From the range <?php 
    echo $form_begin; 
?> to <?php 
    echo $form_end; 
?> I have selected the random number <?php 
    echo rand($form_begin, $form_end); 
?>.</p> 
</body> 
</html> 