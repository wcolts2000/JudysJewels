<?php
if( isset($_POST['n']) && isset($_POST['e'])){
	$n = $_POST['n'];    
	$e = $_POST['e'];    
	$to = "mj455080@yahoo.com";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "Success!!! You will be notified as more products become available. Thank you for your interest";
	} else {
		echo "We are sorry!!! The server failed to send the message. Please try again later.";
	}
}
?>
