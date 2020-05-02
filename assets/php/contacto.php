<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>VeryTutos Server - Mensaje Enviado</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="logo"><strong>VeryTutos</strong> Server</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
                    <li><a href="info.html">Información</a></li>
					<li><a href="videos.html">Videos</a></li>
					<li><a href="howto.html">How To</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main">
				<div class="inner">
					<div class="image">
						<div align="center"><img src="images/server3.jpg"
                        title="Servidor con Cables" alt="Servidor con Cables" width="70%" height="70%">
                         
        <section id="main">
             <div class="inner">
             <h1>Contacto</h1>
             <header>
                 <p>Para cualquier duda, idea o sugerencia, completa el siguiente formulario de contacto. Si ves enlaces rotos en algun lugar de la página, cosas que crees que se deben mejorar o que te gustaría que se incluyeran en la web, se agradece mucho el interés.</p>
                 <p>Si lo prefieres, puedes ponerte en contacto  con destino a este correo electrónico: gamers05500@gmail.com</p>
                 
             </header>
        </section>
            
        <center>          
<?php

// Definiendo las variables
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'gamers05500@gmail.com';
$titulo = 'Mensaje de un visitante en VeryTutos Server';

 
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
                            
        <!-- formulario de contacto -->
             <link type="text/css" rel="stylesheet" href="assets/css/contacto.css">
                    
             <form method="post" action="assets/php/contacto.php">  
                 
                 <label for="nombre">Nombre:</label>
                 <input id="nombre" name="nombre" required placeholder="Nombre completo" type="text">
                 
                 <label for="email">Tu Email:</label>
                 <input id="email" name="email" type="text" required placeholder="ejemplo@email.com" type="text">
                 
                 <label for="mensaje">Mensaje:</label>
                 <textarea id="mensaje" name="mensaje" required placeholder="Ejemplo: ¡Muy buena la pagina!"></textarea>
                 
                 <input id="submit" name="submit" type="submit" value="Enviar">
             </form>
        <!-- formulario de contacto -->
                            
        </center>      
            
            
        <!-- Publicidad de shorte.st -->                     
                 <a href="http://join-shortest.com/es/ref/c40de9266a" target="_blank"> <div align="center"><img src="images/publicidad.png" title="Comparte tus enlaces y gana dinero real" width="728" height="90">
            </div>
        <!-- Publicidad de shorte.st -->     
                
            </section>

                            
		<!-- Footer -->
			<footer id="footer">
				</ul>
				<div class="copyright">
					&copy; VeryTutos-Server Design by <a href="https://www.youtube.com/user/gamers05500" target="_blank">Elian De La Rosa 2020</a> | <a href="contacto.html">Contacto</a>
				</div>
            </footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>