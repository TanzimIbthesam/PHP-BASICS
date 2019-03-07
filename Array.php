<?php 
/*
An array is a data structure that stores one or more similar type of values in a single value. For example if you want to store 100 numbers then instead of defining 100 variables its easy to define an array of 100 length.

*/
//Index Array-Array assigned through numbers
$subject=['Maths','Physics','Chemistry'];

echo $subject[0],"<br>";
echo $subject[1],"<br>";
//It can also be written as
// $subj[0]="History";
// $subj[1]="Math";
// echo $subj[0];
//Through count() function we can determine length of an array
// echo count($subject);
//forloop in index array
 $players=["Messi","Ronaldo","Mbappe","Messi"];

$playercount=count($players);
for($i=0;$i<$playercount;$i++){
    echo  $players[$i];
    echo "<br>";
}

//Assosiative Array
//In assosiative array key is assigned to value
$age=[
    'Aziz'=>25,
    'Rahil'=>20,
    'Sahil'=>15
];
//foreachloop in Assosiative array
foreach($age as $name=>$years){
    echo "His name is ".$name. " and he is ".$years,"<br>";
}
$mobilestock=[

    ['Samsung',100],
    ['Oppo',150],
    ['Huawei',250]

];
echo "The brand is ".$mobilestock[0][0]. "and its stock is ".$mobilestock[0][1];

?>