<?php
function space($string){
	if(preg_match('/ /',$string)){
	return true;}
	else{
		return false;
	}
}
$string ='this   doesnthaveanyspace';

if(space($string)){
	echo 'has space';
}else{
	echo'no space';
	
}

?>
