<?php
require 'connect.inc.php';
?>
<form action ="index.php" method ="GET">
               Choose a food Type:
              <select name ='uh'>
			  <option value='u'>Unhealthy</option>
			  <option value='h'>healthy</option>
			  </select><br></br>
			  <input type="submit" value="submit">
			  </form>


<?php

if(isset ($_GET['uh'])&&!empty($_GET['uh'])){
	 $uh=$_GET['uh'];
	echo $uh;
	die();
	$query =" SELECT username,password FROM users ORDER BY ID ";

	if($query_run = mysqli_query($connection,$query)){
	if (mysqli_num_rows($query_run)==null){
		echo "no result found";
		
	}
	else{
	while($query_row= mysqli_fetch_assoc($query_run)){
		$name =$query_row['username'];
		$password=$query_row['password'];
		
		echo $name.' password is '.$password.' <br>';
	}
	}
	}
	else{
		echo mysqli_error();
	}
}	

?>