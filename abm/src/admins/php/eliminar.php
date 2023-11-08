<?php
$legajo = $_GET['legajo'];

$conexion=mysqli_connect('localhost','root', '', 'dbalumnos');
$consulta= "delete from alumnos where legajo like $legajo";
$respuesta=mysqli_query($conexion, $consulta);
if($respuesta){
    header("Location: ../inicio.php");
}else{
    echo "Error al eliminar al alumno";
}
?>