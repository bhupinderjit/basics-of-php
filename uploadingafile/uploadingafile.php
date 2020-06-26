<?php

$name= $_FILES['file']['name'];
//$size=$_FILES['file']['size'];
//$type= $_FILES['file']['type'];

$tmp_name=$_FILES['file']['tmp_name'];

if (isset ($name)){
	if(!empty($name)){
	$location='upload/';
	if(move_uploaded_file($tmp_name,$location.$name));
	echo 'uploaded';
}
else{
	echo "Please choose a file";
}
}


?>

<form action="uploadingafile.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file"><br><br>
<input type ="submit" value="submit">
</form>