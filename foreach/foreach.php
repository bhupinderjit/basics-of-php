<?php
$food = array('Healthy'=> 
                         array('salad','vegetable','Tomato'),
               'Unhealthy'=>
			             array('pizza','icecream','momos'));
foreach($food as $element =>$inner_array){
	echo '<strong>'.$element.'</strong> <br>';
	foreach($inner_array as $item){
		
echo $item.'<br>';
	}
?>
