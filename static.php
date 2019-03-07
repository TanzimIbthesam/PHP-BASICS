<?php 
//After writing a function the function which cant be erased is called static function
function useStatic() {
    static $number = 9;
    echo $number;
    $number--;
}
useStatic();
echo "<br>";
useStatic();
echo "<br>";
useStatic();

//Will learn more detailed in OOP

?>