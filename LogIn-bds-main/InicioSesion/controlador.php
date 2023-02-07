<?php

if(!empty($_POST["btnIniciar"])){
    if (empty($_POST["usuario"]) and empty($_POST["contraseña"])) {
        echo '<div>LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["contraseña"];
        $sql=$conexion->query(" select * from iniciosesion where usuario='$usuario' and password='$clave' ");
        if ($datos=$sql->fetch_object()) {
            header("location:concuenta.php");
        } else {
            echo '<div>ACCESO DENEGADO</div>';
        }
        
    }
    
}

?>