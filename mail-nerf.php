<?php
	$emailto = 'reservas@aresxtreme.com';
	$toname = 'Ares reservas';
	$emailfrom = $_POST["email"];
	$namefrom = $_POST["fullname"];
	$phonefrom = $_POST["phone"];
	$fromname = 'Ares Extreme';
	$subject = 'Ares Extreme - Reservas Nerf';
	$messagebody = 'Hola mi nombre es: '. $namefrom .' este es mi correo ' . $emailfrom . ' y mi teléfono es: '. $phonefrom .', solicito una reserva.';
	$headers = 
		'Return-Path: ' . $emailfrom . "\r\n" . 
		'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
		'X-Priority: 3' . "\r\n" . 
		'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
		'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" . 
		'Content-Transfer-Encoding: 8bit' . "\r\n" . 
		'Content-Type: text/plain; charset=UTF-8' . "\r\n";
	$params = '-f ' . $emailfrom;
	$test = mail($emailto, $subject, $messagebody, $headers, $params);
	// $test should be TRUE if the mail function is called correctly
	header("Location: /nerf.html#mailSend");
?>