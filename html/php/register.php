<?php

    $name = strip_tags($_POST['name']);
    $surname = strip_tags($_POST['surname']);
    $DNI = strip_tags($_POST['DNI']);
    $degree = strip_tags($_POST['degree']);
    $password = strip_tags($_POST['password']);

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "robotechurjc@gmail.com";
    $to = "pirosflame@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    $bool = mail($to,$subject,$message, $headers);
    if($bool){
        echo "Mensaje enviado";
    }else{
        echo "Mensaje no enviado";
    }
?>
