

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body class="d-flex  justify-content-center align-items-center">
<form action="index.php" method="post">
    <div class="login">
        <div class="formulario">
        <input type="text" name="usuario" placeholder="Usuario">
        <br>
        <br>
        <input type="text" name="contrasenia" placeholder="Contraseña">
        <br>
        <br>
        <input type="submit" class="boton" value="Iniciar sesion">
        </div>
        
    </div>
</form>
    
</body>
</html>

<?php
include_once('../includes/conexion.php');
$usuario =  htmlspecialchars($_POST['usuario'], ENT_QUOTES, 'UTF-8');
$contrasenia = htmlspecialchars($_POST['contrasenia'], ENT_QUOTES, 'UTF-8');


if(isset($usuario) && isset($contrasenia)){
    $traerUsuarios = $mysqli->prepare(" SELECT * FROM usuarios");
    $traerUsuarios->bind_param("si,si", $usuario, $contrasenia);
    $traerUsuarios->execute();
    $resultado = $traerUsuarios->get_result();

    while($user = $resultado->fetch_assoc()){
        if($usuario === $user['usuario'] && $contrasenia === $user['contrasenia']){
            session_start();
            $_SESSION['admin'] = 'admin';
            header('Location: ../panel.php');
        }

        else{
            echo '<script>alert("Datos incorrectos")</script>';
        }
    }
}





?>
