<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLangyage('ru', 'phpmailer/language/');
$mail->IsHTML(true);


//от кого
$mail->setFrom('n-konstantinova@mail.ru', 'от Allynav')

//кому
// $mail->addAddress('0207natalya@gmail.com', 'кому Allynav')

//тема
$mail->Subject = ('Сообщение с сайта Allynav')

///Письмо

$body = '<h3>Новое сообщение</h3>';

if(trim(!empty($_POST['name']))){
    $body.='<p>Имя '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['phone']))){
    $body.='<p>Телефон '.$_POST['phone'].'</p>';
}

$mail->Body = $body;

//Отправка

if (!$mail->send()){
    $meessage = 'Ошибка';
} else{
    $meessage = 'Отправленно';
}

$response = ['message' => $meessage];
header('Content-type: application/json');
echo json_encode($response);


?>

