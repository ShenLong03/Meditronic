<?php

if ($_POST){ 

$num = md5(time());

//MAIL BODY
$body = "
<html>
<head>
<title>Mensaje Web Meditronic</title>
</head>
<body style='background:#EEE; padding:30px;'>
<h2 style='color:#767676;'>Mensaje Web Meditronic</h2>";

$body .= "
<strong style='color:#0090C6;'>Nombre: </strong>
<span style='color:#767676;'>" . $_POST["nombre"] . "</span> <br>";

$body .= "
<strong style='color:#0090C6;'>Correo: </strong>
<span style='color:#767676;'>" . $_POST["correo"] . "</span> <br>";

$body .= "
<strong style='color:#0090C6;'>Teléfono: </strong>
<span style='color:#767676;'>" . $_POST["telefono"] . "</span> <br>";

$body .= "
<strong style='color:#0090C6;'>Detalle: </strong>
<span style='color:#767676;'>" . $_POST["mensaje"] . "</span>";

$body .= "</body></html>";

//FILES NO EXISTS

// HTML HEADERS
$headers = "From: Mensaje de Contacto <".$_POST['correo']."> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "Reply-To: ".$_POST['correo']." \r\n";


// SEND MAIL
mail("info@meditroniccr.com", "Mensaje Web Meditronic" , $body, $headers);
} ?>

<script language="Javascript">
location.href='index.html';
</script>
<script languaje='javascript' type='text/javascript'>
window.close();</script>

