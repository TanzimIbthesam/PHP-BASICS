<?php 
//Operators
//Arithmatic Operator-+,-,%,
$x=10;
$y=3;
echo $x%$y,"<br>";

echo $x/$y,"<br>";
//Assignment Operator-+=
$a=11;
$b=4;
echo $a=$b+5;
echo $a+=$b;
// echo $a=$b;
// echo $a-=$b;
//Logical Operator-AND/OR
//PHP Logical OPERATOR-==,===,!=,>,<
$c=10;
$d=55;
if($c==$d || $c<=$d){
    echo "Condition is true"."<br>";
}else{
    echo "Condition is true"."<br>";
   
}
echo "<br>";
//PHP Increment/decrement operator
$z=5;
echo ++$z;



?>