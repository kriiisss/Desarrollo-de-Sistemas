<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
$email = $_GET['email'];
$conexion = new mysqli("localhost","root","","dbalumnos");



if(isset($email)){
    $consulta= "SELECT * FROM admins WHERE email ='$email'";
    $result = $conexion->query($consulta);
    $row = $result->fetch_assoc();

    if($result -> num_rows>0){
        $mail = new PHPMailer(true);
        $_SESSION['status'] = "Se ha enviado un correo electrónico con los pasos a seguir.";
        try {           
            $mail->isSMTP();                                     
            $mail->Host       = 'smtp.gmail.com';              
            $mail->SMTPAuth   = true;                            
            $mail->Username   = 'altabajaymodificacion@gmail.com';             
            $mail->Password   = 'vcbo crfx qube kyaw';                              
            $mail->Port       = 587;            

            $mail->setFrom('altabajaymodificacion@gmail.com', 'Alta Baja y Modificación');
            $mail->addAddress($row['email'], $row['nombre']);            

            $mail->isHTML(true);
            $mail->Subject = 'Recuperación de contraseña';
            $mail->Body    = 'Para recuperar su contraseña, por favor haga click en el siguiente enlace: <a href="localhost/abm/src/admins/nuevaContraseña.php?id='.$row['legajo'].'">Recuperar contraseña</a>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            header("Location:../index.php");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }else{
        echo "La dirección de correo electrónico no está asociada a ninguna cuenta";
    }
}


?>