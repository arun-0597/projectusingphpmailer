<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');

$mail = new PHPMailer();

if($_POST) {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'xxxxxxxxxxxxxxxxxxx'; // your email address
    $mail->Password = 'yyyyyyyyyyyyyyyyyyy'; // your email server app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('xxxxxxxxxxxxxxxxxxx'); // your email address
    $mail->addAddress('vvvvvvvvvvvvv');  // recipent address
    $mail->isHTML(true);
    $mail->FromName = $_POST['displayname'];;

    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['body'];
    var_dump($_FILES['attachment']['tmp_name']);
    var_dump($_FILES['attachment']['name']);
    $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
    $send = $mail->send();
    echo $send;
}
