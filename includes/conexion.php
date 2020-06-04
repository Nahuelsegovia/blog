<?php

$host = 'dee';
$user = 'kdaleef';
$pass = '009snndowd';
$db = 'jekohdf';



$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno){
    echo $mysqli->connect_errno;
}

?>
