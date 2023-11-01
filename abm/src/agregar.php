<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seguimiento</title>

</head>
<style>
    body{
    background-color: rgb(0, 0, 78);
}

body{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    align-items: center;
    justify-content: center;
}
h1{
    color:white;
    text-decoration: none;
    font-size: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

a{
    color:white;
    text-decoration: none;
    font-size: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
</style>
<body>

<?php
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $sexo=$_GET['sexo'];
    $dni=$_GET['dni'];
    $nacimiento=$_GET['nacimiento'];
    $telefono=$_GET['telefono'];
    $anio=$_GET['anio'];
    $division=$_GET['division'];


$conexion=mysqli_connect("localhost", "root", "", "dbalumnos") or die('Error al conectarse.');

$consulta= "insert into alumnos (nombre, apellido, sexo, dni, fecha_nacimiento, telefono, anio, division)values('$nombre', '$apellido', '$sexo', $dni, '$nacimiento', $telefono, $anio, $division)";
$respuesta=mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>
    <center>
        <h1>Alumno ingresado correctamente</h1><br>
        <a href="index_admins.html">Volver</a>
    </center>
  
</body>
</html>