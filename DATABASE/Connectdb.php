<!-- <?php 

/*
Database Queries
A query is a question or a request.

We can query a database for specific information and have a recordset returned.

Look at the following query (using standard SQL):

SELECT LastName FROM Employees
The query above selects all the data in the "LastName" column from the "Employees" table.

To learn more about SQL, please visit our SQL tutorial.
Should I Use MySQLi or PDO?
If you need a short answer, it would be "Whatever you like".

Both MySQLi and PDO have their advantages:

PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.

Both are object-oriented, but MySQLi also offers a procedural API.

Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.
*/
//My sqli Object Oriented
// $servername="localhost";
// $user="root";
// $db="testdb";
// $password="";
 //
// $conn=new mysqli($localhost,$user,$password);

// if($conn->connect_error){
//     die("Connection error".$conn->connect_error);
// }else{
//     echo "Connection established successfully";
// }
//MySQLi connect procedural
// $conn=mysqli_connect($localhost,$user,$password);
// if(!$conn){
//     die("Connection failed".mysqli_connect_error());
// }
// echo "Connection established successfully";
//PDO
// $servername="localhost";
// $user="root";
// $db="testdb";
// $password="";
// try{
//     $conn=new PDO("mysql:host=$servername;dbname=testdb",$user,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "Connection established successfully";
// }catch(PDOException $e){
//     echo "Connection not succesful ".$e->getMessage();
// }

?>
 -->
