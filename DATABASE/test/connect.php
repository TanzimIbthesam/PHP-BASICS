<?php 

$servername="localhost";
$user="root";
$password="";
$dbname="testdb";
//Object Oriented mysqli
// $conn=new mysqli($servername,$user,$password);
// if($conn->connect_error){
//     die("Connection Error".$conn->connect_error);
// }
// echo "Connection established successfully";
//Procedural mysqli
// $conn=mysqli_connect($servername,$user,$password);
// if(!$conn){
//     die("Connection error:".mysqli_connect_error);
// }
// echo "Connection established succesfully";
//PDO
try{
    $pdo=new PDO("mysql:host=localhost;dbname=testdb",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connection established succesfully";
}catch(PDOException $e){
    die("Connection error").$e->getMessage();
}

// 



?>