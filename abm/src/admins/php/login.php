<?php
$user = $_GET['user'];
$pass = $_GET['pass'];

$conexion = new mysqli("localhost","root","","dbalumnos");

if(isset($user) && isset($pass)){
    $statement = $conexion->prepare("SELECT * FROM admins WHERE user = ? and pass = ?");

    $statement->execute(array($user, $pass));

    if($row = $statement->fetch()){
        session_start();
        $_SESSION["user"]=$user;
        header("Location:../inicio.php");
        echo htmlspecialchars($user);
    }else{
        echo "Nombre de usuario y/o contraseña incorrectos";
    }
}

//' or 1 = 1; #
//<script>location.href="https://google.com"</script>

?>