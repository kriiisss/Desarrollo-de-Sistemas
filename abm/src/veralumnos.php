<?php
$conexion=mysqli_connect("localhost", "root", "", "dbalumnos") or die('Error al conectarse.');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Ver alumnos</title>
    <link rel="stylesheet" href="css/veralumnos.css">
</head>
<body>
    <center>
        <table>
            <thead>
                <th>Legajo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Sexo</th>
                <th>DNI</th>
                <th>Fecha de nacimiento</th>
                <th>Teléfono</th>
                <th>Año</th>
                <th>División</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </thead>

            <?php
                $consulta= "select* from alumnos";
                $respuesta=mysqli_query($conexion, $consulta);

                while($mostrar=mysqli_fetch_array($respuesta)){
            ?>
            <tr>
                <td><?php echo $mostrar['legajo'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellido'] ?></td>
                <td><?php echo $mostrar['sexo'] ?></td>
                <td><?php echo $mostrar['dni'] ?></td>
                <td><?php echo $mostrar['fecha_nacimiento'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>
                <td><?php echo $mostrar['anio'] ?></td>
                <td><?php echo $mostrar['division'] ?></td>
                <td><a href="editar.php?
                legajo=<?php echo $mostrar['legajo']?> &
                nombre=<?php echo $mostrar['nombre']?>&
                apellido=<?php echo $mostrar['apellido']?>&
                sexo=<?php echo $mostrar['sexo']?> &
                dni=<?php echo $mostrar['dni']?> &
                nacimiento=<?php echo $mostrar['fecha_nacimiento']?> &
                telefono=<?php echo $mostrar['telefono']?> &
                anio=<?php echo $mostrar['anio']?> &
                division=<?php echo $mostrar['division']?>             
                ">Modificar</a></td>
                <td class="delete"><a href="eliminar.php">Eliminar</a></td>
            </tr>
            <?php
                }
                mysqli_close($conexion);
            ?>
        </table>
    </center>
    
</body>
</html>