<?php
    $nombre = "$_POST"['nombre'];
    $apellidos = "$_POST"['apellidos'];
    $email = "$_POST"['email'];
    $telefono = "&_POST"['telefono'];
    $mensaje = "$_POST"['mensaje'];
    $para = 'octabevi@protonmail.com';
    $titulo = 'MSG WEBPAGE PLESK';
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
    
    if ("$_POST"['submit']) {
    if (mail ($para, $titulo, $msjCorreo)) {
    echo 'El mensaje se ha enviado';
    } else {
    echo 'Falló el envio';
    }
    }
?>
