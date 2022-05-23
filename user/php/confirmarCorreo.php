<?php
    require_once 'Email.php';

    $email = $_POST['emailUcol'];
    $cuenta = $_POST['noCuenta'];

    $subject = "Confirmacion de solicitud - Biblioteca Ciencias del Mar";

    $longitudCorreo = strlen($email);
    $dominio = substr($email, $longitudCorreo - 8, $longitudCorreo);

    echo "<h1>$longitudCorreo<h1>";
    echo "<h1>$email</h1>";
    echo "<h1>$cuenta</h1>";
    echo "<h1>$dominio</h1>";


    if( $dominio == "@ucol.mx" && strlen($cuenta) == 8){
        echo "<script> alert('Acceso Autorizado'); </script>";

        $codigo = random_int(1000, 9999);

        $msg = "Estimado usuario, para completar la solicitud de material haga click en".
            "el siguiente enlace: http://localhost/project/Mobuc_ultima/Mobuc.html \n".
            "¡Busca, Aparta y Aprende!\r\n";

        $msg = wordwrap($msg, 70, "\r\n");

        $correo = new Email();

        $correo->setEmail($email);
        $correo->setSubject($subject);
        $correo->setBody($msg);
        $correo->sendEmail();

    }else
        echo "<script> alert('Acceso Denegado'); </script>";
    header('Location: ../index.html');

