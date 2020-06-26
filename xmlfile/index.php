<?php
$xml =simplexml_load_file('example.xml');

foreach ($xml->producer as $producer){
//	echo $producer->name.'is'.$producer->age.'<br>';
	echo $producer->name.'('.$producer->age.')<br><br>';
	foreach($producer->show as $show){
		echo $show->showname.' on '.$show->showdate.'<br><br>';
		
	}
	
}



?>