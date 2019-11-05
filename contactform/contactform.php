<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

$body = $_POST['message'];
$subject = $_POST['subject'];
$from = $_POST['email'];
$name = $_POST['name'];

sendMail($from, $name, $subject, $body);

function sendMail($from, $name, $subject, $body){
	$mail = new PHPMailer;
	$mail->IsSMTP();
	// $mail->SMTPDebug = ; 
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Host = "smtp.gmail.com";
	$mail->IsHTML(true);
	$mail->Username = "bootnetcrasher@gmail.com";
	$mail->Password = "29121990marie";
	$mail->SetFrom($from, $name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	// $mail->AddAddress("monsitenet@monsitenet.com", "Admin Monsitenet");
	$mail->AddAddress("kouamedavid124@gmail.com", "Admin Monsitenet");
	if (!$mail->send()) {
	    // echo 'Mailer Error: ' . $mail->ErrorInfo;
	    echo "Erreur lors de l'envoi du mail !";
	} else {
	    echo 'OK';
	}
}


/*
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
	
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
$mail = new PHPMailer;

$mail->Host = "mail.infomaniak.com";
$mail->Port = 587; 
$mail->IsSMTP(); // enable SMTP
$mail->SMTPAuth = true; 
$mail->SMTPDebug = 2; 
$mail->SMTPSecure = 'tls';


$mail->Username = "opstech.digital@groupedigital.com";
$mail->Password = "Digiopstech2019";
$mail->SetFrom("opstech.digital@groupedigital.com", 'Digiopstech2019');


$mail->IsHTML(true);
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("bootnetcrasher@yopmail.com");

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
*/
?>