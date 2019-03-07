<?php 
$x=5;
//Variable is something value which is kept in a container 
echo "$x","<br>";
echo "His house number is ".$x,"<br>";
//LOCAL and GLOBAL SCOPE
//Local -If variable has any value inside function than it is known as local scope it can only be accessed from inside function
//Global -If variable has any value outside function than it is known as global scope it can only be accessed from outside function
function localscope(){
    $name="Tanzim";
    echo "My name is".$name."<br>";
}
localscope();
//echo  "My name is".$name,"<br>";// output-error Undefined variable: name in C:\xampp\htdocs\PHP\variable.php on line 14
$naam="Tanzim";
function globalscope(){
    // echo "My naam is".$naam;//It genrates error
    echo "My naam is","<br>"; 
}
echo "My naam is ".$naam;
 globalscope();
//For accesing global variable $GLOBALS variable is used


?>