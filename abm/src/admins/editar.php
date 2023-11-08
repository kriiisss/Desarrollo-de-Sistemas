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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar datos del alumno</title>
    <link rel="stylesheet" href="php/agregar.css">
</head>
<body>
    <form action="php/actualizar.php" method="GET">
        <h1>MODIFICAR DATOS</h1>
        <input type="hidden" name="legajo" value="<?=$legajo?>"><br>
        <div class="name">
            <div class="first-name">              
                <label for="nombre">Ingrese el nombre del alumno *</label><br>
                <input type="text" name="nombre" value="<?=$nombre?>" required>
            </div>
            <div class="surname">
                <label for="legajo">Ingrese el apellido del alumno *</label><br>
                <input type="text" name="apellido" value="<?=$apellido?>" required><br><br>
            </div>   
        </div>
        <div class="dni-date-of-birth">
            <div class="dni">
                <label for="legajo">DNI del alumno *</label><br>
                <input type="text" name="dni" value="<?=$dni?>" required>
            </div>
            <div class="date-of-birth">
                <label for="legajo">Fecha de nacimiento *</label><br>
                <input type="date" name="nacimiento" value="<?=date("Y-m-d",strtotime($nacimiento))?>" required><br><br>
            </div>
            
        </div>
        <div class="gender-phone-number">
            <div class="gender">
                <label for="legajo">Sexo *</label><br>
                <select name="sexo" value="<?=$sexo?>" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select><br><br>
            </div>
            <div class="phone-number">
                <label for="legajo">Teléfono del alumno *</label><br>
                <input type="text" name="telefono" value="<?=$telefono?>" required><br><br>
            </div>         
        </div>
            <div class="class">
                <div class="anio">
                    <label for="anio">Año *</label><br>
                    <select name="anio" id="anio" value="<?=$anio?>" required>
                        <option name="1">1</option>
                        <option name="2">2</option>
                        <option name="3">3</option>
                        <option name="4">4</option>
                        <option name="5">5</option>
                        <option name="6">6</option>
                    </select>
                </div>
                <div class="division">
                    <label for="anio">División *</label><br>
                    <select name="division" id="anio" value="<?=$division?>" required>
                        <option name="1">1</option>
                        <option name="2">2</option>
                        <option name="3">3</option>
                        <option name="4">4</option>
                        <option name="5">5</option>
                    </select><br><br>
                </div>   
            </div> 
        
        <input type="submit" class="modificar" value="GUARDAR CAMBIOS">
    </form>
</body>
</html>