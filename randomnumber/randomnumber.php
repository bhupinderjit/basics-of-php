<?php

if(isset($_POST['roll'])){
	$rand = rand(1,6);
	echo 'You rolled a '.$rand;
}

?>

<form action ="randomnumber.php" method="POST">
     <input type="submit" name="roll" value="Rolldice">
	 </form>