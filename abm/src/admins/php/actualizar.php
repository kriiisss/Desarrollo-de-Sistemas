<?php
    $legajo=$_GET['legajo'];
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $sexo=$_GET['sexo'];
    $dni=$_GET['dni'];
    $nacimiento=$_GET['nacimiento'];
    $telefono=$_GET['telefono'];
    $anio=$_GET['anio'];
    $division=$_GET['division'];

$conexion=mysqli_connect('localhost','root', '', 'dbalumnos');

$consulta= "update alumnos set nombre='$nombre', apellido='$apellido', sexo='$sexo', dni=$dni, fecha_nacimiento='$nacimiento', telefono=$telefono, anio=$anio, division=$division where legajo like $legajo";

$respuesta=mysqli_query($conexion, $consulta);

if($respuesta){
    header("Location:../inicio.php");
}else{
    echo "Error al modificar los datos";
}

?>