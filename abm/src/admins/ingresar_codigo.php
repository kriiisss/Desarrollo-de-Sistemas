<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer contraseña</title>
</head>
<style>
    *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    align-items: center;
    justify-content: center;
    text-align: center;
    
}

.container{
    box-shadow: 5px 5px 20px rgb(70, 70, 70);
    width: 500px;
    height: 325px;
    padding: 30px;
    border-radius: 35px;
}

.restablecer{
    margin-top: 50px;
}

label{
    color: rgb(0, 0, 0);
    font-size: 1.2rem;
}

input{
    margin-top: 0.8rem;
    height: 2.5rem;
    width: 22rem;
    border-radius: 7px;
    font-size: 1rem;
    border: solid rgb(168, 168, 168) 2px;
}

.modificar{
    background-color: green;
    color: white;
    height: 3.2rem;
    border: none;
    border-radius: 25px;
    margin-top: 20px;
    cursor: pointer;
}
</style>
<body>
    <div class="container">
        <h1>INGRESAR CÓDIGO</h1>
        <form action="/restablecer.php" method="GET">
            
            <div class="restablecer">              
                <label for="email">Ingrese el código enviado a su dirección de correo electrónico</label><br>
                <input type="text" name="email" required>
            </div>
            <input type="submit" class="modificar" value="ENVIAR">
        </form>  
    </div>
</body>
</html>