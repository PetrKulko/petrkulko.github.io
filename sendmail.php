<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->isHTML(true); 

$mail->setFrom('petrokulko@gmail.com', 'Peter Kulko');
$mail->addAddress('kulkovalentina57@gmail.com');
$mail->Subject = "Привет!";

if(!$mail->send()) {
    $message = 'ошибка';
} else {
    $message = 'Данные отправленны!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);

?>