<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet", href="css/styles.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Curso</title>
</head>
<body id="todo">
    <form action="inscripcion_curso.php" method="POST">
        <h1 class="title">Inscribete</h1>
        <label>
            <i class="fa-solid fa-user"></i>
            <input placeholder="Nombre y apellido" type="username", id="nombre", name="nombre">
        </label>
        <label>
            <i class="fa-solid fa-envelope"></i>
            <input placeholder="Correo electrónico" type="email", id="correo", name="correo">
        </label>
        <label>
            <i class="fa-solid fa-window"></i>
            <input placeholder="Lenguaje" type="username", id="curso", name="curso">
        </label>
       
        <input name="btnInscribirse" class="btn" type="submit" value="Inscribir">

    </form>
    <script src="js/main.js"></script>
</body>
</html>