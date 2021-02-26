<?php

    $destinatario = 'deibyokacoma@gmail.com';

    $nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    $asunto = $_POST['asunto'];
    $empresa = $_POST['mensaje'];

    $header = "Enviado desde la pagina THE WEIGTH";
    $mensajeCompleto = $empresa . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";
?>