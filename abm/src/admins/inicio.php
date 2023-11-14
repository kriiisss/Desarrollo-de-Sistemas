<?php 
    $conexion=mysqli_connect("localhost", "root", "", "dbalumnos") or die('Error al conectarse.');
    session_start();
    if(empty($_SESSION["user"])){
        header("Location: index.html");
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administradores | A.B.M.</title>
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
</head>
<body>
    <div class="grid-container">
        <header>
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined" >account_circle</span><?php $variable = $_SESSION["user"]; echo " ".htmlspecialchars($variable); }?>
            </div>
        </header>

        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    A.B.M.
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">dashboard</span> Dashboard
                </li>
                <li class="sidebar-list-item">
                    <a href="agregar.html" style="text-decoration: none;color: white"><span class="material-icons-outlined">person_add</span> Agregar alumno</a>
                </li>
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">settings</span> Configuración
                </li>
        </aside>

        <main>
        <div class="filters">
        </div>
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
                <td class="delete"><a href="php/eliminar.php?
                legajo=<?php echo $mostrar['legajo']?>">Eliminar</a></td>
            </tr>
            <?php
                }
                mysqli_close($conexion);
            ?>
        </table>
        </form>
        <a href="php/logout.php">Cerrar Sesión</a>
        </main>
    
        
    </div>

    <script src="js/login.js"></script>
    
</body>
</html>
