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


$mail->From = 'ilawdatabase@gmail.com';
$mail->FromName = 'ILAW Database';
$mail->addAddress('ilawdatabase@gmail.com');
$mail->addAddress($email);


$mail->isHTML(true);                                

$mail->Subject = 'ILAW Database File Review';
$mail->Body    = 'Hi, '.$email.', thank you for uploading to ILAW Database. Rest assured that your upload will be reviewed immediately.<br><br><br>

	Upload Review: <br><br>

	<b>Title:</b> '.$researchtitle.'<br>
	<b>Authors:</b> '.$researchauthors.'<br>
	<b>Year:</b> '.$researchyear.'<br>
	<b>Subject:</b> '.$researchsubject.'<br>
	<b>Abstract:</b> '.nl2br($researchabstract).'<br>
	<b>Keywords:</b> '.$researchkeywords.'<br>
 ';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '';
}
 include 'header_and_footer/footer2.php';
}

exit();
?>
