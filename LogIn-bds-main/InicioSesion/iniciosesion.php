<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet", href="css/styles.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form method= "post" action="">
        <h1 class="title">Iniciar sesión</h1>
        <?php
        include("conexion_bd.php");
        include("controlador.php");
        ?>
        <label>
            <i class="fa-solid fa-user"></i>
            <input placeholder="Nombre y apellido" type="username", id="usuario", name="usuario">
        </label>
        <label>
            <i class="fa-solid fa-lock"></i>
            <input placeholder="Contraseña" type="password", id="contraseña", name="contraseña">
        </label>
        
        <input name="btnIniciar" class="btn" type="submit" value="Iniciar">

        <a href="registro.php" class="link">¿No tienes cuenta?</a>
    </form>
    <script src="js/main.js"></script>
</body>
</html>