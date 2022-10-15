<?php

if ($_POST) {


    $to  = 'nazdorovie-site@yandex.ru'; //info@vityazgroup.ru
    $from = 'noreply@nazdorovie.site';
    $subject = "Заявка с сайта";
    $message = 'Заявка с сайта - <a href="#" target="_blank">nazdorovie.site</a><br/>Имя: '.$_POST['form_name'].'. Телефон: '.$_POST['form_phone'].'. Почта: '.$_POST['form_email'].'. Сообщение: '.$_POST['form_message'].';';

    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <noreply@nazdorovie.site>\r\n";
    $headers .= 'Cc: sbezuglii@mail.ru' . "\r\n";
    $result = mail($to, $subject, $message, $headers);

    if ($result) {
        echo json_encode(['status' => 'true', 'vars' => $_POST]);
    }
}



