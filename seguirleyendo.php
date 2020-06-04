<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
<div class="container">
     <?php include_once('./includes/menu.php'); ?>

     <?php
        include_once('./includes/conexion.php');
        $id_post =  htmlspecialchars($_GET['seguirleyendo'], ENT_QUOTES, 'UTF-8');
        $traerPost = $mysqli->prepare(" SELECT * FROM post WHERE id= ? ");
        $traerPost->bind_param("i", $id_post);
        $traerPost->execute();
        $resultado = $traerPost->get_result();

        while($post = $resultado->fetch_assoc()){
            echo'
            <div class="posteos">
                <div class="post">
                    <h1>'.$post['titulo_post'].'</h1>>
                    <p>'.$post['contenido'].'</p>
                </div>
            </div>
            ';
        }
        
     ?>
 </div>





</body>
<footer><?php include_once('./includes/footer.php');?></footer>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>