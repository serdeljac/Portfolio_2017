<?php
	//$to = "stjepan@serdeljac.com";
	$to = "serdeljac88@gmail.com";
	$subject = "You've been contacted on your portfolio!";
	$name = "Name: " . $_POST['fullname'];
	$email = "Email: " . $_POST['email'];
	$msg = $_POST['msg'];
	
	$message = 	$name . "\n" . 
						$email . "\n \n" . 
						$msg;

	mail($to,$subject,$message,$email);
	header('Location: /');exit();
	
?> 