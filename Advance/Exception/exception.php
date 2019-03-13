<?php 
/*
With PHP 5 came a new object oriented way of dealing with errors.

Exception handling is used to change the normal flow of the code execution if a specified error (exceptional) condition occurs. This condition is called an exception.

This is what normally happens when an exception is triggered:

The current code state is saved
The code execution will switch to a predefined (custom) exception handler function
Depending on the situation, the handler may then resume the execution from the saved code state, terminate the script execution or continue the script from a different location in the code
We will show different error handling methods:

Basic use of Exceptions
Creating a custom exception handler
Multiple exceptions
Re-throwing an exception
Setting a top level exception handler
Note: Exceptions should only be used with error conditions, and should not be used to jump to another place in the code at a specified point.

Basic Use of Exceptions
When an exception is thrown, the code following it will not be executed, and PHP will try to find the matching "catch" block.

If an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.

Lets try to throw an exception without catching it:


Try a block of code 
If something goes wrong
try that exception if the value is not right
Then catch that code and display the error message
*/
$age=10;
try {
    if($age>18){
        echo "You are allowed to vote";
    }else{
        throw new Exception("You are not allowed to vote");
    }
    //

}
catch(Exception $ex){
echo 'Sorry:'.$ex->getMessage();
}





?>﻿


