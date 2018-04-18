<?php

$filename = $_FILES["file"]["name"];
$tempname=$_FILES["file"]["tmp_name"];
echo $filename, "<br>" , $tempname;
if ($_FILES["file"]["size"] > 10000) {
	die("File too big!");
} else {
if (move_uploaded_file($_FILES["file"]["tmp_name"], "/Users/092834/Desktop/fileuploaded/Doggie.gif")) {
echo "Your file was successfully uploaded.";
} else {
echo "<br>There was a problem uploading your file - please try again.";
}
}
?>