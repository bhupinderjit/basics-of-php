<?php
$conn_error='Could not connect';

$mysql_host ='localhost';
$mysql_user='root';
$mysql_pass='';

$mysql_db='a_database';

$connection=mysqli_connect($mysql_host,$mysql_user,$mysql_pass)or die($conn_error);
mysqli_select_db($connection,$mysql_db)or die($conn_error);

echo 'connected';
?>