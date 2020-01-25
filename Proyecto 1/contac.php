<?php

$para='h31_31@hotmail.com, h31313131@gmail.com';
$asunto="Mensaje de mi primera pagina";
$mailheader ="From: ".$_POST["email"]."\r\n";
$mailheader .="Reply-To: ".$_POST["email"]."\r\n";
$mailheader .="Content-type: text/html; charset=utf-8\r\n ";

$MESSAGE_BODY ="Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY .="\n<br>Email: ".$_POST["email"]."\n";
$MESSAGE_BODY .="\n<br>Mensaje: ".nl2br($_POST["message"])."\n";

mail($para,$asunto,$MESSAGE_BODY,$mailheader) or die("Error al envia email!");
header('Location: http://jotajotavm.com/sonia')

?>