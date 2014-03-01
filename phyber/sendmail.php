<?php
$name = $_POST['name'];


$to = 'kmaillette@gmail.com';
$subject = $_POST['subject'];

$message = "Name: $name\n";
$message .= 'Email: ' . $_POST['email'] . "\n";
$message .= 'Message:' . $_POST['comments'] . "\n";
$message .= "\n";


$headers =	'From: <' . $_POST['email'] . '> '. $name ."\r\n" .
			'Reply-To: <' . $_POST['email'] . '> '. $name . "\r\n" .
			'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
header('location: confirm.php');
?>