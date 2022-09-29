<?php

if ($_POST) {


//    $to  = 'info@vityazgroup.ru'; //info@vityazgroup.ru
//    $from = 'noreply@vityazgroup.ru';
//    $subject = "Заявка с сайта";
//    $message = 'Заявка с сайта - <a href="#" target="_blank">russia.vityazgroup.ru</a><br/>Имя: '.$_POST['name'].'. Телефон: '.$_POST['phone'].'. Почта: '.$_POST['email'].';';
//
//    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
//    $headers .= "From: <noreply@vityazgroup.ru>\r\n";
//    $headers .= 'Cc: dv@vityazgroup.ru' . "\r\n"; //dv@vityazgroup.ru
//    $result = mail($to, $subject, $message, $headers);
//
//    if ($result) {
        echo json_encode(['status' => 'true', 'vars' => $_POST]);
//    }
}



