
<?php
$to = "keshavjoshi.ca@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: keshavjoshi.ca@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

 mail( $to,$subject,$txt,$headers);
?>



