<?php 
/*
Validating data = Determine if the data is in proper form.

Sanitizing data = Remove any illegal character from the data.
PHP filters are used to validate and sanitize external input.

The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker.

The filter_list() function can be used to list what the PHP filter extension offers:
*/



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
<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

<!-- 
  Why use Filters?
Many web applications receive external input. External input/data can be:
User input from a form
Cookies
Web services data
Server variables
Database query results -->

</body>
</html>
<?php
// PHP filter_var() Function
// The filter_var() function both validate and sanitize data.

// The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:

// The variable you want to check
// The type of check to use 
//Sanitize a String
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr,"<br>";

?>
<?php 
// Validate an Integer
// The following example uses the filter_var() function to check if the variable $int is an integer. If $int is an integer, the output of the code below will be: "Integer is valid". If $int is not an integer, the output will be: "Integer is not valid":
  $int = 100;

  if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
      echo("Integer is valid");
  } else {
      echo("Integer is not valid"),"<br>";
  }


?>
<?php 
// Tip: filter_var() and Problem With 0
// In the example above, if $int was set to 0, the function above will return "Integer is not valid". 
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid"),"<br>";
} else {
    echo("Integer is not valid"),"<br>";
}
?>
<?php 
// Validate an IP Address
// The following example uses the filter_var() function to check if the variable $ip is a valid IP address:
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address"),"<br>";
} else {
    echo("$ip is not a valid IP address"),"<br>";
}
?>
<?php 
// Sanitize and Validate an Email Address
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address"),"<br>";
} else {
    echo("$email is not a valid email address"),"<br>";
}
// Sanitize and Validate a URL
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}

//https://www.w3schools.com/php/php_ref_filter.asp
?>