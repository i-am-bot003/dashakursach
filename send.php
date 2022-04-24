<?php
$to = 'shtorm_and_happy-enderman@mail.com'; //куда
$from = trim($_POST['mail']);
$fio = $_POST['name']; //фио
$tel = $_POST['tel']; //телефон
$adres = $_POST['adres']; //адрес
$sms = $_POST['sms']; //коммент
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$adres = htmlspecialchars($adres);
$sms = htmlspecialchars($sms);
$subject = "Отчёт";

if(mail($to, $subject, $sms)) {
    echo 'Письмо отправлено!';
} else {
    echo 'Ошибка';
}






?>