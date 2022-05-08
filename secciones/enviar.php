<?php
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$medidas = $_POST['medidas'];
$descripcion = $_POST['descripcion'];


$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain"

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Su e-mail es: " . $correo . " \r\n";
$message .= "Celular del contacto: " . $celular . " \r\n";
$message .= "Mensaje: " . $_POST['descripcion'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'matias_lazzaroni@hotmail.com';
$asunto = 'PEDIDO DE PRESUPUESTO // WEB TOCTOC';

mail ($para, $asunto, utf8_decode($message), $header);

header("Location:../index.html");

?>