<?php
require 'connect.inc.php';
$user_ip=$_SERVER['REMOTE_ADDR'];


function ip_exists($ip){
	global $user_ip;
	global $connection;
	$query ="SELECT ip FROM hits_ip WHERE ip =$user_ip";
	$query_run=mysqli_query($connection,$query);
	$query_num_rows=mysqli_num_rows($query_run);
	if($query_num_rows==0){
		return false;
	}
	else if($query_num_rows>=1){
		return true;
	}
}
function ip_add($ip){
	global $connection;
	$query="INSERT INTO hits_ip VALUES('$ip')";
	$query_run =mysqli_query($connection,$query);
	
}

function update_count(){
global $connection;
	$query = "SELECT count FROM hits_count";
	if(@$query_run =mysqli_query($connection,$query)){
		$query_row= mysqli_fetch_assoc($query_run);
		$count=$query_row['count'];
		$count_inc=$count+1;
		$query_update="UPDATE hits_count SET count=$count_inc";
		$query_update_run=mysqli_query($connection,$query_update);
		echo $count_inc;
	}
	
	}
	//update_count();
	
//ip_add($user_ip);
if(ip_exists($user_ip)){
	echo 'exists';
}
else{
	echo 'does not exists';
}

?>