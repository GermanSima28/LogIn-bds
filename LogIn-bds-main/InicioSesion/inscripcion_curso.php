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
$curso=$_POST['curso'];

//Sentencia de sql
$query="INSERT INTO usuario_curso VALUES('$email','$nombre','$curso')";


//Se ejecuta la sentencia de sql
$ejecutar=mysqli_query($conectar,$query);

//Verificar la ejecucion
if(!$ejecutar){
    echo "Hubo algun error";
}else{
    echo "FELICIDADES YA ESTAS INSCRITO EN UNO DE NUESTROS CURSOS<br><a href='concuenta.php'>Volver</a>";
}
?>