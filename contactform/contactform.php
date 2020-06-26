<?php
if(isset($_POST['contact_name'])&& isset($_POST['contact_email'])&& isset($_POST['contact_text'])){
	 $contact_name=$_POST['contact_name'];
	 $contact_email=$_POST['contact_email'];
	 $contact_text=$_POST['contact_text'];
	
	if(!empty($contact_name)&& !empty($contact_email)&&!empty($contact_text)){
		
	$to='bhindekang199698@gmail.com';
	$subject='contact form submited';
	$body=$contact_name."\n".$contact_text;
	$header='From: '.$contact_email;
	
	if(mail($to,$subject,$body,$header)){
		echo "Thanks For contacting us";
	}
	else{
		echo'Sorry an error occured';
	}
	
	}else{
		echo 'All fields are recquired';
	}
	
}

?>

<form action="contactform.php" method="POST">
            Name:<br><input type="text" name="contact_name"><br><br>
            Email:<br><input type="text" name="contact_email"><br><br>
            Message:<br>
                    <textarea name ="contact_text" rows="6" cols="30"></textarea><br><br>
                    <input type="submit" value="Send"> 
</form>