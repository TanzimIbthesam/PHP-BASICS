<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    FirstName<input type="text"name="firstname">
    <input type="submit"value="Submit">
    </form>
    <?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
      $name=$_REQUEST['firstname'];
      if(empty($name)){
       echo "You have not inserted your name";
      }else{
         echo "You have inserted your name correctly";
      }
  }


 ?>
</body>
</html>