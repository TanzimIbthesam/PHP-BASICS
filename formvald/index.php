<?php 
if(isset($_POST['submit'])){
    // echo "Hello", $_POST['firstname'];
    if(empty($_POST['firstname'])){
        echo "Please insert your name";
    }else{
        echo "Hello", $_POST['firstname'];
    }
}

/*
Alternatively we can write

*/
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $name=$_REQUEST['firstname'];
//     if(empty($name)){
//         echo "Insert the name please";
//     }else{
//         echo " Hello ".$name;
//     }
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <label for="">FirstName</label><br>
    <input type="text"name="firstname"><br>
    <button name="submit">Submit</button>
    </form>
</body>
</html>