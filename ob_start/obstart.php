<?php ob_start();?>
<h1 >This is my page</h1>

<?php
$redirect_page="https://www.google.ca/";
$redirect= true;

if(redirect==true){
	header('Location:'.$redirect_page);
}

ob_end_flush();
?>