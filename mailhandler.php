<?php

	if(isset($_POST['submit'])) {
		$name =$_POST['name'];
		$email =$_POST['email'];
		$phone =$_POST['phone'];
		$sex =$_POST['sex'];
		
		$to="huber.samira1999@icloud.com";
		$subject ='From Submission';
		$message="Name: " .$name. "\n\n" . "Phone: " . §phone . "\n\n";
		$headers="From: " .$email;
		
		mail($to,$subject,$message, $header);
		header("Location: index.php?mailsend");
	}
?>