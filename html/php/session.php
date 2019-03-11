<?php
    // Inicias esta función
    session_start();

    // Luego agrega la condicional para verificar que existe el valor guardado en autenticado
    // Si la sesión autenticado NO tiene el valor de 'connect_true' en String normal
    // o encriptado (Puedes agregar algún método que encripte) puedes agregar
    // puedes retornarlo al inicio para nunca pueda acceder
     if( empty($_SESSION["autenticado"]) || $_SESSION["autenticado"] != 'connect_true') {
         header ("Location:../login.php");
    }
?>
