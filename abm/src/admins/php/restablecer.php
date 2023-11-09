<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
$email = $_GET['email'];
$conexion = new mysqli("localhost","root","","dbalumnos");


if(isset($email)){
    $consulta= $conexion->prepare("SELECT * FROM admins WHERE email = ?");
    $consulta->execute(array($email));

    if($row = $consulta->fetch()){
        $mail = new PHPMailer(true);

        try {           
            $mail->isSMTP();                                     
            $mail->Host       = 'smtp.gmail.com';              
            $mail->SMTPAuth   = true;                            
            $mail->Username   = '';             
            $mail->Password   = '';                              
            $mail->Port       = 587;            

            $mail->setFrom('christian.forteet32@gmail.com', 'Christian');
            $mail->addAddress('christianforte453@gmail.com', 'Joe User');            

            $mail->isHTML(true);
            $mail->Subject = 'Recuperación de contraseña';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }else{
        echo "La dirección de correo electrónico no está asociada a ninguna cuenta";
    }
}


?>