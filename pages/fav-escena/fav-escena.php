<?php

include_once './includes/db.inc.php';


    if(isset($_SESSION['id'])){

        $idUsuario = trim($_SESSION['id']);
        
        $sql = 'SELECT DISTINCT e.id_escena, e.nombre, c.urlcanciondropbox, p.url FROM favescena as f INNER JOIN escena as e ON e.id_escena = f.id_escenaFavEscena INNER JOIN cancion as c ON e.id_cancionEscena = c.id_cancion INNER JOIN paisaje as p ON e.id_paisajeEscena = p.id_paisaje INNER JOIN usuario as u WHERE id_usuarioFavEscena ='.$_SESSION['id'];
       
        $resultado = $pdo->query($sql);

        if($resultado->rowCount() != 0){

            foreach ($resultado as $row){
                $escenasfav[] = array(
                    'name' => $row['nombre'],
                    'paisajeurl' => $row['url'],
                    'cancionurl' => $row['urlcanciondropbox'],
                    'idescena' => $row['id_escena']
                );
                
            }
            include 'fav-escena.html.php';
        } else {
            echo 'No tienes ninguna música agregada a favoritos';
        }
    } else {
        echo 'Debes registrarte o iniciar sesion';
        exit();
    }