<?php 
//Function in php-A function is a block of statements that can be used repeatedly in a program. A function will not execute immediately when a page loads. A function will be executed by a call to the function.
//It does not execute on its own
//You need to call it
//Not case sensitive
//Parameter
//Through parameter information is passed to function
function information($name,$address){
echo "His name is ".$name. "his address is ".$address,"<br>";
}

information("Tanzim","BARIDHARA DOHS");
//here $name and $address are parmeters inside function information
//return value
//default parameter value-its value we assign insise the parameter.
//If any argument value is not passed it accepts default value
function info($name="Tadic"){
    echo "His name is ".$name,"<br>";
}
info();
//return value of any function 
$a=65;
$b=70;

function cal(){
    $calculate=$GLOBALS['a']+$GLOBALS['b'];
    return "The total sum is ".$calculate;
    
}
echo cal();

//Return value of any function

?>