<?php

// Definiendo las variables
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = "gamers05500@gmail.com";
$titulo = "Mensaje de un visitante en VeryTutos Server";

 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
 
// Si se llenaron los campos correctamente se envia el mensaje, sino emite un error
if ($_POST['submit']) {
if (mail ($para, $titulo, $msjCorreo))
   header('Location:consulta.html'); {
   echo 'El mensaje se ha enviado correctamente'; }
else {
   echo 'Por favor llene correctamente los campos'; }
}
?>