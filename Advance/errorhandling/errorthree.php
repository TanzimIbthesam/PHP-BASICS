<?php 

// An error can be triggered anywhere you wish in a script, and by adding a second parameter, you can specify what error level is triggered.

// Possible error types:

// E_USER_ERROR - Fatal user-generated run-time error. Errors that can not be recovered from. Execution of the script is halted
// E_USER_WARNING - Non-fatal user-generated run-time warning. Execution of the script is not halted
// E_USER_NOTICE - Default. User-generated run-time notice. The script found something that might be an error, but could also happen when running a script normally
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Ending Script";
    die();
  }
  
  //set error handler
  set_error_handler("customError",E_USER_WARNING);
  
  //trigger error
  $test=2;
  if ($test>=1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
  }



?>
<?php





?>




