
<?php

if (isset($_POST['user_input'])&&!empty($_POST['user_input'])){
	echo $user_input = $_POST['user_input'];
	}
?>
<hr>
<form action ="wordsensoring.php" method="POST">
<textarea name ="user_input" rows="6" cols="30">
<?php  echo $user_input; ?></textarea>
<input type="submit" value ="Submit">
</form>
