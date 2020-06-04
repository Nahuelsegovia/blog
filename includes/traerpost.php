<?php
include_once('conexion.php');

$traerPost = $mysqli->query(" SELECT * FROM post ");

while($dataPost= $traerPost->fetch_assoc()){
    echo '<form action="seguirleyendo.php" method="get">
        <div class="post">
            <h1>'.$dataPost['titulo_post'].'</h1>>
            <p>'.$dataPost['intro_post'].'</p>
            <input type="hidden" value="'.$dataPost['id'].'" name="seguirleyendo">
            <input type="submit"  value="Seguir leyendo...">
        </div>
    </form>';
}


?>


