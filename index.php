<?php

    // Variables de campos.
    $nombre = $_POST['txtNombre'];
    $apellidos = $_POST['txtApellidos'];
    $email = $_POST['txtEmail'];
    $telefono = $_POST['txtTelefono'];
    $mensaje = $_POST['txtMensaje'];


    $para = 'octabevi@protonmail.com';
    $titulo = "MSG WEBPAGE PLESK".date('dd/mm/yyyy', time());
    
    $cuerpo = "Nombre: ".$nombre;
    $cuerpo.= "\nApellidos: ".$apellidos;
    $cuerpo.= "\nE-Mail: ".$email;
    $cuerpo.= "\nTeléfono: ".$telefono;
    $cuerpo.= "\n\nMensaje: ".$mensaje; 

    mail($para, $titulo, $cuerpo);
    header("Location:index.html");
?>
