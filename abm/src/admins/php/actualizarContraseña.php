<?php
$id = $_GET['id'];
$nuevaContra = $_GET['nuevaContra'];
$conexion=mysqli_connect("localhost", "root", "", "dbalumnos") or die('Error al conectarse.');
$consulta= "update admins set pass= '$nuevaContra' where legajo='$id'";
$respuesta=mysqli_query($conexion, $consulta);
mysqli_close($conexion);
if($respuesta){
    header("Location:../index.php");
}
?>