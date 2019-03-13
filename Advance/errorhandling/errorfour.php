<?php 
// Error Logging
// By default, PHP sends an error log to the server's logging system or a file, depending on how the error_log configuration is set in the php.ini file. By using the error_log() function you can send error logs to a specified file or a remote destination.

// Sending error messages to yourself by e-mail can be a good way of getting notified of specific errors.
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Webmaster has been notified";
    error_log("Error: [$errno] $errstr",1,
    "someone@example.com","From: webmaster@example.com");
  }
  
  //set error handler
  set_error_handler("customError",E_USER_WARNING);
  
  //trigger error
  $test=2;
  if ($test>=1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
  }






?>