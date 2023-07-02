<?php
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

if (isset($_POST['submit'])) {
 $contactname = $_POST["name"];
 $subject = $_POST["subject"];
          $contactsection = $_POST["section"];
          $contactemail = $_POST["email"];
        	$contactconcerns = $_POST["concerns"];

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               

$mail->isSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Username = 'ilawdatabase@gmail.com';
$mail->Password = 'Doobry_Database_2021';
$mail->Port = 465;

$mail->CharSet="iso-8859-1";
$mail->SMTPAuth = true;                               


$mail->From = 'ilawdatabase@gmail.com';
$mail->FromName = 'ILAW Database';
$mail->addAddress('ilawdatabase@gmail.com');

$mail->isHTML(true);                                  

$mail->Subject = $subject;
$mail->Body    = '
    Email: '.$contactemail.' <br>
    Name: '.$contactname.' <br>
    Section: '.$contactsection.' <br>
    Message: '.$contactconcerns.' <br>
    
 ';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 

else {
    echo '';
}
}
 include 'header_and_footer/footer2.php';
exit();
?>

