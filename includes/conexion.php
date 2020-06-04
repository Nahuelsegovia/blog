<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'blog';



$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno){
    echo $mysqli->connect_errno;
}

?>
