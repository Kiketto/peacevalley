<?php

require_once '../../../includes/db.inc.php';

    $idMusica = trim($_REQUEST['idmusica']);
    $idUsuario = trim($_REQUEST['idusuario']);

    $sql = 'SELECT * FROM favmusica WHERE id_musicaFavMusica = :idmusica AND id_usuarioFavMusica = :idusuario';
    $stmt = $pdo->prepare($sql);
    $p = [':idmusica'=>$idMusica, ':idusuario'=>$idUsuario];
    $stmt->execute($p);
        
    if($stmt->rowCount() != 0) {
        $sql = 'DELETE FROM favmusica WHERE id_musicaFavMusica = :idmusica AND id_usuarioFavMusica = :idusuario';
        $stmt = $pdo->prepare($sql);
        $p = [':idmusica'=>$idMusica, ':idusuario'=>$idUsuario];
        $stmt->execute($p);
        echo "Se ha borrado con existo";
        header('location: ./index.html.php?pageSelect=favmusica');
        exit();
    }


?>