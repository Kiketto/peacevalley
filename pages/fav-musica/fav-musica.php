<?php

include_once '../../includes/db.inc.php';

if(isset($_REQUEST['submit'])){
    if(isset($_REQUEST['idusuario'])){

        $idUsuario = trim($_REQUEST['idusuario']);
        
        $sql = 'SELECT DISTINCT c.id_cancion, c.nombre, c.autor, c.url, c.urlsoundcloud FROM favmusica as f INNER JOIN cancion as c ON f.id_musicaFavMusica = c.id_cancion INNER JOIN usuario as u ON f.id_usuarioFavMusica = '.$_REQUEST['idusuario'];
       
        $resultado = $pdo->query($sql);

        foreach ($resultado as $row){
            $cancionesfav[] = array(
                'name' => $row['nombre'],
                'cancionurl' => $row['url'],
                'cancionautor' => $row['autor'],
                'cancionurlnombre' => $row['urlsoundcloud'],
                'idcancion' => $row['id_cancion']
            );
            header('location: ../../index.html.php?pageSelect=favmusica');
        }
    } else {
        header('location: ../../index.html.php?pageSelect=escena');
        exit();
    }
} else {
    header('location: ../../index.html.php?pageSelect=escena');
    exit();
}
  

