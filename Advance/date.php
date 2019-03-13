<?php 
/*date() function is used for organizing date and time
syntax-date(format,timestamp)
format is must it instructs the format of timestamp.Timestamp not mandatory.it instrcts the timestamp.Default is present date and time
//way we can get General date
The way you are want date format depends on determination of parameter(format)
Some characters are given below
d-It represents one day of the month(1-31)
m-it represents a month(1-12)
y-It represents a year(4 digit)
l-camel case represents a particular day 
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
    <?php 
  echo "The date today is ".date("d/m/Y"),"<br>";
  echo "The date today is ".date("d-m-Y"),"<br>";
  echo "The date today is ".date("d.m.Y"),"<br>";
   echo "The date today is ".date("l"),"<br>";
    ?>
</body>
</html>
<?php
/*
Way of getting time
h-12 hour format it represents 0-12
m-minute format it represents 0-59
s-it represents seconds 0-59
a-AM PM
date returns time of return server 
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
    <?php echo "The current time is ".date("h:i:sa"),"<br>";  ?>
</body>
</html>
<?php
/*
How to get time of preferred timezoned
Yor server has a different timezone you may resode in a country which has a sepertae time xone in that case
date_default_timezone_set("Continent/City")needs to be set
For list of timezones please check http://php.net/manual/en/timezones.php
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
    <?php 
    date_default_timezone_set("Asia/Dhaka");
    echo "The current time is ".date("h:i:sa"); 
    //It needs to be checked again
     ?>
</body>
</html>
<?php 
/*mktime()
For date mktime returns a unix timestamp
Unix Timestamp Unix Epoch (January 1 1970 00:00:00 GMT) in a particular time determines the second
syntax-mktime(hour,minute,second,month,day,year)
*/
$timetech=mktime( 8,41,57,9,03,2019);
echo "The date prepared is " . date("Y-m-d h:i:sa", $timetech),"<br>";



?>

<?php 
/*For making our task easy it uses 
strtotime() the string is converted to Unix string time
strtotime(time,now)
*/
$day = strtotime("09:30pm March 09 2019");
echo "The prepared date is " . date("Y-m-d h:i:sa", $day),"<br>";



?>

<?php
//Advance Use
$day=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $day) . "<br>";

$day=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $day) . "<br>";

$day=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $day) . "<br>";
?>
<?php 
$daystart = strtotime("Friday");
$dayend = strtotime("+6 weeks", $daystart);

while ($daystart < $dayend) {
  echo date("M d", $daystart) . "<br>";
  $daystart = strtotime("+1 week", $daystart);

}

?> 
<?php
 $targetDay = strtotime("April 23");
 $distanceDay = ceil(($targetDay-time())/60/60/24);
 echo " For April 23 we have " . $distanceDay ." days left";
?>
