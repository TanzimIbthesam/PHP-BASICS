<?php 
//The for statement is used when you know how many times you want to execute a statement or a block of statements.
for($x=5;$x<=10;$x++){
echo $x,"<br>";
}
//foreach loop
//The foreach loop statement
// The foreach statement is used to loop through arrays. For each pass the value of the current array element is assigned to $value and the array pointer is moved by one and in the next pass next element will be processed.
//array
$player=['Messi','Ronaldo','Tevez'];
foreach($player as $result){
    echo $result,"<br>";
}
//The break statement
// The PHP break keyword is used to terminate the execution of a loop prematurely.

// The break statement is situated inside the statement block. It gives you full control and whenever you want to exit from the loop you can come out. After coming out of a loop immediate statement to the loop will be executed.
// The continue statement
// The PHP continue keyword is used to halt the current iteration of a loop but it does not terminate the loop.

// Just like the break statement the continue statement is situated inside the statement block containing the code that the loop executes, preceded by a conditional test. For the pass encountering continue statement, rest of the loop code is skipped and next pass starts.

         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            if( $value == 3 )continue;
            echo "Value is $value <br />";
         }
      
?>