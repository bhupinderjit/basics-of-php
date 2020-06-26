<?php
if (isset($_POST['name'])){
	$name=$_POST['name'];
	if (!empty($name)){
		
		$handle=fopen('names.txt','a');
		fwrite($handle,$name."\n");
		fclose($handle);
		
		echo 'Current name in file: ';
		
		
		$readin=file('names.txt');
		foreach($readin as $fname){
          echo $fname.' , ';
		}
	}
	else{
		echo 'Please type a name';
	}
	}
?>
<form action ="file.php " method="POST">
Name:<br><input type ="text" name="name"><br><br>
         <input type="submit" value="Submit">
