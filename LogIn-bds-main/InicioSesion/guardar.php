<?php

$usuario = "sqluser";
$password = "password";
$servidor = "localhost";
$basededatos ="inicioappweb";

//Conectamos con el servidor 
$conectar=mysqli_connect($servidor,$usuario,$password);

//Verificamos la conexion
if (!$conectar) {
    echo"No se pudo conectar con el servidor";
} else {
    $base=mysqli_select_db($conectar,$basededatos);
    if(!$base){
        echo"No se encontro la base de datos";
    }
}

//Recuperar las variables
$email=$_POST['correo'];
$nombre=$_POST['nombre'];
$clave=$_POST['clave'];

//Sentencia de sql
$query="INSERT INTO iniciosesion VALUES('$email','$nombre','$clave')";

//Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conectar, "SELECT * FROM iniciosesion WHERE email='$email' ");
if(mysqli_num_rows($verificar_correo) > 0){
echo'
<script>
alert("Este correo ya esta registrado, intenta con otro diferente");
window.location = "registro.php";
</script>
';
exit();
}

//Verificar que el usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conectar, "SELECT * FROM iniciosesion WHERE usuario='$nombre' ");
if(mysqli_num_rows($verificar_usuario) > 0){
echo'
<script>
alert("Este usuario ya esta registrado, intenta con otro diferente");
window.location = "registro.php";
</script>
';
exit();
}


//Se ejecuta la sentencia de sql
$ejecutar=mysqli_query($conectar,$query);

//Verificar la ejecucion
if(!$ejecutar){
    echo "Hubo algun error";
}else{
    echo "Datos guardados correctamente<br><a href='index.php'>Volver</a>";
}
?>