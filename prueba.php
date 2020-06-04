<?php
include_once('./includes/conexion.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$stmt = $mysqli->prepare("SELECT * FROM post WHERE id = ?");
$stmt->bind_param("i", $_POST['id']);
$stmt->execute();
$resultado = $stmt->get_result();
while($obtenerId = $resultado->fetch_assoc()){
    echo $obtenerId['titulo_post'];
}
$stmt->close();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prueba.php" method="post">
        <input type="text" name="id">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>