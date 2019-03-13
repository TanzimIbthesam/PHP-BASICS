<?php 
//The readfile() function is useful if all you want to do is open up a file and read its contents.
//The readfile() function reads a file and writes it to the output buffer.
echo readfile("glosssary.txt"),"<br>";
//PHP Open File - fopen()
// A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.
//The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened. 
$myfile = fopen("glosssary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("glosssary.txt"));
fclose($myfile);
//
/*
PHP Read File - fread()
The fread() function reads from an open file.

The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.

The following PHP code reads the "webdictionary.txt" file to the end:

fread($myfile,filesize("webdictionary.txt"));
*/
/*
PHP Close File - fclose()
The fclose() function is used to close an open file.

It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources!

The fclose() requires the name of the file (or a variable that holds the filename) we want to close:


*/
//PHP Read Single Line - fgets()
// The fgets() function is used to read a single line from a file.

// The example below outputs the first line of the "webdictionary.txt" file:

// Example
?>
<?php
$myfile = fopen("glosssary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
<?php 
/*
PHP Check End-Of-File - feof()
The feof() function checks if the "end-of-file" (EOF) has been reached.

The feof() function is useful for looping through data of unknown length.




*/
$myfile = fopen("glosssary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
/*
PHP Read Single Character - fgetc()
The fgetc() function is used to read a single character from a file.


*/



?>
<?php
$myfile = fopen("glosssary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>