<?php
$legajo = $_GET['legajo'];

$conexion=mysqli_connect('localhost','root', '', 'dbalumnos');
$consulta= "delete from alumnos where id like $legajo";
$respuesta=mysqli_query($conexion, $consulta);
if($respuesta){
    echo "Alumno eliminado correctamente";
}else{
    echo "Error al eliminar al alumno";
}
?>