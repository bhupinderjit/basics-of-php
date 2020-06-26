<?php
$filename= 'names.txt';
$handle=fopen($filename,'r');

$datain=fread($handle,filesize($filename));

$names_array = explode(',',$datain);

foreach($names_array as $names){
	echo $names.'<br>';
	
}






?>