<?php
    $conexion=mysqli_connect('localhost','root', '', 'dbalumnos');
    $email = $_GET['email'];
    $token = random_bytes(5);
    
    include "mail_reset.php";
    if($enviado){
        $conexion->query("insert into passwords_admins(token, email, codigo)
        values('$email', '$token', '$codigo') ") or die($conexion->error);
        echo '<p>Verifica tu correo electrónico para restablecer la contraseña</p>';
    }
?>