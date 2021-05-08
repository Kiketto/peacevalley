<?php

include_once './includes/db.inc.php';


    if(isset($_SESSION['id'])){

        $idUsuario = trim($_SESSION['id']);
        
        $sql = 'SELECT DISTINCT c.id_cancion, c.nombre, c.autor, c.url, c.urlsoundcloud FROM favmusica as f INNER JOIN cancion as c ON f.id_musicaFavMusica = c.id_cancion INNER JOIN usuario as u ON f.id_usuarioFavMusica = '.$_SESSION['id'];
       
        $resultado = $pdo->query($sql);

        if($resultado->rowCount() != 0){

            foreach ($resultado as $row){
                $cancionesfav[] = array(
                    'name' => $row['nombre'],
                    'cancionurl' => $row['url'],
                    'cancionautor' => $row['autor'],
                    'cancionurlnombre' => $row['urlsoundcloud'],
                    'idcancion' => $row['id_cancion']
                );
                
            }
            include 'fav-musica.html.php';
        } else {
            echo 'No tienes ninguna música agregada a favoritos';
        }
    } else {
        echo 'Debes registrarte o iniciar sesion';
        exit();
    }

  

