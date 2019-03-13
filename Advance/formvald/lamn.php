<?php 
// print_r($_POST);
//The print_r() function is a built-in function in PHP and is used to print or display information stored in a variable
if(isset($_POST)){
    $errors=array();
    //start validation
    //check errors
    if(empty($_POST['firstname'])){
        $errors['firstname1']="Your firstname cannot be empty";
        // echo 'Firstname cannot be empty';
    }
    if(empty($_POST['lastname'])){
         $errors['lastname1']="Your lastname cannot be empty";
        // echo 'Lastname cannot be empty';
    }
    if(empty($_POST['Email'])){
         $errors['Email1']="Your email cannot be empty";
        // echo 'Email cannot be empty';
    }
    if(empty($_POST['password'])){
        $errors['password1']="Your password cannot be empty";
        // echo 'Password cannot be empty';
    }
   
    
    if(count($errors==0)){
        header("Location:success.php");
        exit();
    }
}


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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="">First Name</label><br>
    <input type="text"name="firstname"value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>"><br>
    <p><?php if(isset($_POST['firstname1']))echo $errors['firstname1']; ?></p> 
    <label for="">Last Name</label><br>
    <input type="text"name="lastname"value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>"><br>
    <p><?php if(isset($_POST['lastname1']))echo $errors['lastname1']; ?></p>
    <label for="">Email</label><br>
    <input type="text"name="Email"value="<?php if(isset($_POST['Email']))echo $_POST['Email'];;?>"><br>
    <p><?php if(isset($_POST['Email1']))echo $errors['Email1']; ?></p>
    <label for="">Password</label><br>
    <input type="password"name="password"><br><br>
    <p><?php if(isset($_POST['password1']))echo $errors['password1']; ?></p>
    <button name="Submit">Submit</button>
    </form>
</body>
</html>