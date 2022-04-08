<?php
$name = $_POST['name'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];
$mail = $_POST['mail'];
$modelo = $_POST['modelo'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n" + $apellido;
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $celular . " \r\n";
$message .= "Consulta por: " . $_POST['modelo'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'g-berlingofurgon.lyon@myworkplace.com.ar';
$asunto = 'Nuevo dato de Landing Page Planes';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>