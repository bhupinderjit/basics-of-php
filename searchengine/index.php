<?php
require 'connect.inc.php';
if(isset($_POST['search_name'])){
	$search_name=$_POST['search_name'];
	if(!empty($search_name)){
		$query="SELECT name FROM names WHERE name LIKE '%".mysqli_real_escape_string($connection,$search_name)."%'";
		$query_run=mysqli_query($connection,$query);
		if(mysqli_num_rows($query_run)){
	echo 'found';
	}
	else{
		echo "no result found";
		
	}
	}
	}
	
?>

<form action="index.php" method="POST">
    Name:<input type="text" name="search_name"><input type="submit" value="search">
</form>