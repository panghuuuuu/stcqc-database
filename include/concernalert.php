<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';


if (isset($_POST['submit'])) {
 $email=$_POST['email'];

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Username = 'ilawdatabase@gmail.com';
$mail->Password = 'Doobry_Database_2021';
$mail->Port = 465;

$mail->CharSet="iso-8859-1";
$mail->SMTPAuth = true;                               // Enable SMTP authentication


$mail->From = '$contactemail';
$mail->FromName = 'ILAW Database';
$mail->addAddress('ilawdatabase@gmail.com');


$mail->isHTML(true);                                

$mail->Subject = 'A New Message has been sent';
$mail->Body    = ''.$email.' just sent a message. <br><br><br>

	Message Preview: <br><br>

    Name:'.$contactname.' <br>
    Section: '.$contactsection.' <br>
    Message: '.$contactconcerns.' <br>
 ';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent';
}

}
exit();
?>