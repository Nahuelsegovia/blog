<!DOCTYPE html>
<?php include_once('./includes/header.php'); ?>
<body>
   <div class="container">
     <?php include_once('./includes/menu.php'); ?>

        <div class="posteos proyectos">
            <h1>Disparador Chopin</h1>
            <img src="./images/chopin.png" alt="Proyecto Disparador Chopin">
            <p>Este fue el primer proyecto que hice con Javascript, basándome en el reto Javascript in 30 days
            Basicamente es un script que escucha los eventos de teclado, específicamente keycode, cuando las teclas
            numéricas del uno hasta el 6 son presionadas, el evento las reconoce y reproduce un audio corto de alguna
            de las composiciones de Chopin. El proyecto se puede ver en <a href="https://disparador-chopin.surge.sh">www.disparador-chopin.surge.sh</a></p>
        </div>
        <hr>
        <div class="posteos proyectos">
            <h1>Coronavirusar</h1>
            <img src="./images/coronavirusar.png" alt="Proyecto Coronavirusar">
            <p>Coronavirusar fue el segundo proyecto que hice con Javascript, de apoco fui aprendiendo como manejarme
            mejor en el ecosistema de JS y fue ese el primer proyecto en el que utilicé peticiones Ajax hacia una API
            pública. El proyecto está configurado para hacer la petición cada dos minutos hacia la API y de esa forma
            mantener los datos actualizados. La API utilizada es de <a href="https://www.Covidvisualizer.com">Covidvisualizer.</a> 
            El proyecto se puede ver en <a href="https://coroanvirusar.surge.sh">www.coronavirusar.surge.sh</a></p>
        </div>
        <hr>
        <div class="posteos proyectos">
            <h1>App de tareas</h1>
            <img src="./images/apptareas.png" alt="Proyecto App de Tareas">
            <p>La app de tareas fue el primer proyecto que hice utilizando solo PHP en Back-End y HTML+CSS en Front-End,
            princpalmente es un crud que puede usarse para varias cosas pero fue lo más rápido que se me ocurrió para hacer 
            en ese momento. Actualmente el proyecto no lo tengo hosteado en ningún lado, pero está diponible en mi Github.
            Con eso aprendí lo básico de php para desarollar otras cosas, el proyecto es vulnerable a SQL Injection, Cross Site Scripting
            y Cross Site Request Forgery, cuenta con un panel de administración para poder acceder a 
            crear las tareas.</a> </p>
        </div>
        <hr>
        <div class="posteos proyectos">
            <h1>Ferret Script</h1>
            <img src="./images/ferretscript.png" alt="Proyecto Ferret Script">
            <p>Este es un Script/Snippet en Node que saca todos los links internos y externos de una página web y los envía a un servicio
            similar a Pastebin, el proyecto utiliza los módulos Fetch para realizar las peticiones a los sitios webs y Cheerio para
            procesar toda la información que proviene del html, una vez encontrado los links los guarda en un documento de texto y
            también los envía hacia termbin.com, para poder tener una copia online. También lo tengo disponible como Snippet para 
            front-end. Este proyecto está disponible en mi Github: <a href="https://github.com/Nahuelsegovia/Ferret/">Ferret Script Github</a></p>
        </div>
        <hr>
        <div class="posteos proyectos">
            <h1>Blog personal</h1>
            <img src="./images/nahuelsegovia.png" alt="Proyecto Ferret Script">
            <p>Mi blog personal fue una tarea de varios días, el proyecto fue desarollado completamente en PHP+MySQL para el backend
                y con HTML+CSS para el front-end, sin utilizar ningún Framework. Inicialmente lo que hice fue crear el diseño del blog 
                del lado del front y lo próximo fue pensar como estaría hecha la base de datos. Pasando por el crud me había acordado que
                ya no podía seguir dejando la entrada de los usuarios sin ningún filtro ni medida de seguridad, así que en la marcha aprendí
                a hacer consultas simuladas en PHP a través de queries, por lo que protegí el Login par acceder al panel de control, pero también las 
                entradas del blog y los parámetros GET para cuando voy a traer un post desde la base de datos. Finalmente lo terminé desplegando en Heroku.
            </p>
        </div>
        <hr>
        <div class="posteos proyectos">
            <h1>Apiseries</h1>
            <img src="./images/apiseries.png" alt="Proyecto Apiseries">
            <p>Apiseries es una API REST hecha en Laravel que nos permite crear, ver y eliminar series 
            de nuestra base de datos, en ella podemos guardar las url de las imágenes, openings  la descripcion de la serie y el lugar en 
            donde podemos ver. En este ejemplo consumí la API con Javascript Vanilla e hice el diseño ui 
            con HTML5, CSS3, y algunas configuraciones de Bootstrap + Flexbox.
            </p>
        </div>
        <hr>
        <div class="posteos proyectos">
            <h1>Commercia</h1>
            <img src="./images/commercia.png" alt="Proyecto Commercia">
            <p>Commercia es un proyecto en el que me encuentro trabajando actualmente, ya utilizando un Framework,
            me predispuse con un amigo a crear una especie de MarketPlace que permite crear publicaciones a los comercios
            locales del Gran La Plata(Ensenada, Berisso, La Plata), el proyecto está siendo desarrollado con Laravel 7 
            y tiene como objetivo poder crear publicaciones de productos a cada comercio registrado. Cada comerciante
            podrá tener una tienda individual donde se muestran todos sus productos publicados, y además en la página principal
            se van a filtar por categorías de productos. Una vez que el usuario selecciona producto/s, se conecta con la cuenta de Whatsapp
            del comercio automáticamente, detallando en el mensaje el pedido realizado. </a> </p>
        </div>
   </div>
</body>

<?php include_once('footer.php');?>
</html>
