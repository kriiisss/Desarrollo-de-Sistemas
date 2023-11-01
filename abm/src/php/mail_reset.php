<?php
// Varios destinatarios
$para  = $email . ', '; // atención a la coma

// título
$titulo = 'Restablecer contraseña';
$codigo= rand(1000,9999); 

// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer contraseña</title>
</head> 
<body>
  <h3>'.$codigo.'</h3>
  <p>Ingrese al enlace de abajo para restablecer su contraseña</p>
  <a href="http://localhost/abm/ingresar_ingresar_codigo.php?email='.$email.'&token='.$token.'"></a>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'From: Your name <info@address.com>' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 /*
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
$enviado = false;
if(mail($para, $titulo, $mensaje,"From: me@you.com")){
    $enviado = true;
}
?>