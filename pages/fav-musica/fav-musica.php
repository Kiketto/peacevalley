<?php

include_once '../../includes/db.inc.php';

if(isset($_POST['submit'])){
    if(isset($_POST['idusuario'])){

        $idUsuario = trim($_POST['idusuario']);
        
        $sql = 'SELECT c.nombre, c.autor, c.url, c.urlsoundcloud FROM favmusica as f INNER JOIN cancion as c ON f.id_musicaFavMusica = c.id_cancion INNER JOIN usuario as u ON f.id_usuarioFavMusica = :idusuario';
        $stmt = $pdo->prepare($sql);
        $p = [':idusuario'=>$idUsuario];
        
        $resultado = $stmt->query($p);

        foreach ($resultado as $row){
            $cancionesfav[] = array(
                'name' => $row['nombre'],
                'cancionurl' => $row['url'],
                'cancionautor' => $row['autor'],
                'cancionurlnombre' => $row['urlsoundcloud'],
                'idcancion' => $row['id_cancion']
            );
            echo 'echo';
            include '../../index.html.php?pageSelect=escena';
        }
    } else {
        echo 'hola';
        header('location: ../../index.html.php?pageSelect=escena');
        exit();
    }
} else {
    header('location: ../../index.html.php?pageSelect=escena');
    exit();
}
  

