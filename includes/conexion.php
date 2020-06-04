<?php

$host = 'us-cdbr-east-05.cleardb.net';
$user = 'b345a843350680';
$pass = 'd6a88fbe';
$db = 'heroku_d381c2d1c045de7';



$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno){
    echo $mysqli->connect_errno;
}

?>
