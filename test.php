<?php
 import_request_variables("pg", "form_");
  $xdata = array(
          'foo'    => $form_query,
          'baz' => array('green','blue')
     );
  echo json_encode($xdata);
  
  
  //echo "nthing";
 // return "demo";
?>  