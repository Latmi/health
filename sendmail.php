<?php

if ($_POST) {


    $to  = 'info@vityazgroup.ru'; //info@vityazgroup.ru
    $from = 'noreply@vityazgroup.ru';
    $subject = "Заявка с сайта";
    $message = 'Заявка с сайта - <a href="#" target="_blank">health.ru</a><br/>Имя: '.$_POST['form_name'].'. Телефон: '.$_POST['form_phone'].'. Почта: '.$_POST['form_email'].'. Сообщение: '.$_POST['form_message'].';';

    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <noreply@vityazgroup.ru>\r\n";
    $headers .= 'Cc: dv@vityazgroup.ru' . "\r\n"; //dv@vityazgroup.ru
    $result = mail($to, $subject, $message, $headers);

    if ($result) {
        echo json_encode(['status' => 'true', 'vars' => $_POST]);
    }
}



