<?php 
//The default error handling in PHP is very simple. An error message with filename, line number and a message describing the error is sent to the browser.
// PHP Error Handling
// When creating scripts and web applications, error handling is an important part. If your code lacks error checking code, your program may look very unprofessional and you may be open to security risks.

// This tutorial contains some of the most common error checking methods in PHP.

// We will show different error handling methods:

// Simple "die()" statements
// Custom errors and error triggers
// Error reporting

//Basic Error Handling: Using the die() function
if(!file_exists("welcome.txt")) {
    die("File not found");
  } else {
    $file=fopen("welcome.txt","r");
  }
/*
Creating a Custom Error Handler
Creating a custom error handler is quite simple. We simply create a special function that can be called when an error occurs in PHP.
This function must be able to handle a minimum of two parameters (error level and error message) but can accept up to five parameters (optionally: file, line-number, and the error context):
Syntax
error_function(error_level,error_message,
error_file,error_line,error_context)

*/
// function customError($errno, $errstr) {
//     echo "<b>Error:</b> [$errno] $errstr<br>";
//     echo "Ending Script";
//     die();
//   }
  
?>
<?php 
//Testing the error handler by trying to output variable that does not exist:
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr";
  }
  
  //set error handler
  set_error_handler("customError");
  
  //trigger error
  echo($test);




?>