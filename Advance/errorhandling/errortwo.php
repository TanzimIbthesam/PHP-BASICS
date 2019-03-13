<?php 

//Testing the error handler by trying to output variable that does not exist:
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr";
  }
  
  //set error handler
  set_error_handler("customError");
  
  //trigger error
  echo($test),"<br>";



?>
<?php
// Trigger an Error
// In a script where users can input data it is useful to trigger errors when an illegal input occurs. In PHP, this is done by the trigger_error() function.
$test=2;
if ($test>=1) {
  trigger_error("Value must be 1 or below");
}
?>
