<?php 
/* 
With PHP, it is easy to upload files to the server.

However, with ease comes danger, so always be careful when allowing file uploads!
Configure The "php.ini" File
First, ensure that PHP is configured to allow file uploads.

In your "php.ini" file, search for the file_uploads directive, and set it to On:
     file_uploads=on
Some rules to follow for the HTML form above:

Make sure that the form uses method="post"
The form also needs the following attribute: enctype="multipart/form-data". It specifies which content-type to use when submitting the form
Without the requirements above, the file upload will not work.
Other things to notice:

The type="file" attribute of the <input> tag shows the input field as a file-select control, with a "Browse" button next to the input control
The form above sends data to a file called "upload.php", which we will create next.

*/
?>
<!DOCTYPE html>
<html>
<head>
 <title>UPLOAD</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select photo to upload<br><br>
    <input type="file" name="file"><br><br>
    <button type="submit"name="submit">UPLOAD</button>
</form>

</body>
</html>




