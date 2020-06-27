<?php
require 'connect.inc.php';

$query =" SELECT username,password FROM users ORDER BY ID ";

if($query_run = mysqli_query($connection,$query)){
	
while($query_row= mysqli_fetch_assoc($query_run)){
	$name =$query_row['username'];
	$password=$query_row['password'];
	
	echo $name.' password is '.$password.' <br>';
}
}
else{
	echo mysqli_error();
}
	

?>