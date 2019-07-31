<?php

$nombreHumano = str_replace('-', ' ', $_GET['nombreHumano']);
$nombrePerro = str_replace('-', ' ', $_GET['nombrePerro']);
$correo = str_replace('-', ' ', $_GET['correo']);
$direccion = str_replace('-', ' ', $_GET['direccion']);
$whatsapp = str_replace('-', ' ', $_GET['whatsapp']);
$mensaje = str_replace('-', ' ', $_GET['mensaje']);

$to = 'infofabianacanina@gmail.com';

$subject = 'Contacto desde fabianacanina.com';

$headers = "From: " . $correo . "\r\n";
$headers .= "Reply-To: ". $correo . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$message = '<html>
				<body>
					<p><strong>Nombre del humano <br> </strong>'.$nombreHumano.'</p>
					<p><strong>Nombre del perro <br> </strong>'.$nombrePerro.'</p>
					<p><strong>Correo <br> </strong>'.$correo.'</p>
					<p><strong>Whatsapp <br> </strong>+569'.$whatsapp.'</p>
					<p><strong>Dirección <br> </strong>'.$direccion.'</p><br>
					<p><strong>Mensaje <br> </strong>'.$mensaje.'</p>
				</body>
			</html>';


mail($to, $subject, $message, $headers);