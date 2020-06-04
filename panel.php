

<?php
   include_once('./includes/conexion.php');
   session_start();
   $errors= array();
   
$contenido = $_POST['editor1'];
$titulo_post = $_POST['tituloPost'];
$intro_post = $_POST['introPost'];

if(isset($contenido) && isset($titulo_post) && isset($intro_post) ){
  $mysqli->query(" INSERT INTO post(id, contenido, titulo_post, intro_post ) VALUES(id, '$contenido', '$titulo_post', '$intro_post') ");
}



if(isset($_SESSION['admin'])){
  echo '<!doctype html>
  <html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Classic editor with fixed UI</title>
    <script src="./ckeditor/ckeditor.js"></script>
  </head>
  
  <body>
  <form action="panel.php" method="POST" enctype="multipart/form-data">
  <input type="text" placeholder="Titulo del post" name="tituloPost"> 
  <input type="text" placeholder="introPost" name="introPost">
  Portada del post: <input type="file" name="image" />
  <input type="hidden" value="administrador">
  <textarea cols="80" id="editor1" name="editor1" rows="10" data-sample-short>Pone tu post</textarea>
  <input type="submit" value="Enviar datos" name="subirPost">
  </form>
  
    <script type="text/javascript">
      CKEDITOR.replace("editor1", {
        height: 250
      });
    </script>
  </body>
  
  </html>
  
  ';
}

else {
  echo 'No tenes permiso para estar aca';
}

?>
