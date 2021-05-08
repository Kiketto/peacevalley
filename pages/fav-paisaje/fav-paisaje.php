<?php

include_once './includes/db.inc.php';


    if(isset($_SESSION['id'])){

        $idUsuario = trim($_SESSION['id']);
        
        $sql = 'SELECT DISTINCT p.id_paisaje, p.nombre, p.url FROM favpaisaje as f INNER JOIN paisaje as p ON f.id_paisajeFavPaisaje = p.id_paisaje INNER JOIN usuario as u ON f.id_usuarioFavPaisaje = '.$_SESSION['id'];
       
        $resultado = $pdo->query($sql);

        if($resultado->rowCount() != 0){

            foreach ($resultado as $row){
                $paisajesfav[] = array(
                    'name' => $row['nombre'],
                    'paisajeurl' => $row['url'],
                    'idpaisaje' => $row['id_paisaje']
                );
                
            }
            include 'fav-paisaje.html.php';
            
        } else {
            echo 'No tienes ningun paisaje agregado a favoritos';
        }
    } else {
        echo 'Debes registrarte o iniciar sesion';
        exit();
    }