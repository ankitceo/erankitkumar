<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.mailgun.com';
$mail->SMTPAuth = true;
$mail->Username = 'postmaster@sandboxef19bd997e4048aaa713831d117a91e7.mailgun.org';
$mail->Password = 'Myemail.123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($_POST["email"], $_POST["name"]);
$mail->addAddress('ankit@ankitceo.com', 'Ankit Kumar');
$mail->isHTML(true);

$mail->Subject = $_POST["subject"];
$mail->Body    = $_POST["message"];
$mail->AltBody = $_POST["message"];

if(!$mail->send()) {
    echo 'Message could not be sent. Please check you have a working internet connection.';
} else {
	header('Location: index.html?success');
}
?>