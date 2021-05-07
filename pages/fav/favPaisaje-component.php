<?php

require_once '../../includes/db.inc.php';

    $idPaisaje = trim($_REQUEST['idpaisaje']);
    $idUsuario = trim($_REQUEST['idusuario']);

    $sql = 'SELECT * FROM favpaisaje WHERE id_paisajeFavPaisaje = :idpaisaje AND id_usuarioFavPaisaje = :idusuario';
    $stmt = $pdo->prepare($sql);
    $p = [':idpaisaje'=>$idPaisaje, ':idusuario'=>$idUsuario];
    $stmt->execute($p);
        
    if($stmt->rowCount() == 0){
        $sql = 'INSERT INTO favpaisaje (`id_usuarioFavPaisaje`,`id_paisajeFavPaisaje`) VALUES (:idusuario, :idpaisaje)';
        $stmt = $pdo->prepare($sql);
        $p = [':idpaisaje'=>$idPaisaje, ':idusuario'=>$idUsuario];
        $stmt->execute($p);
        echo "Se ha añadido con existo";
        exit();
        
    } 
    if($stmt->rowCount() != 0) {
        $sql = 'DELETE FROM favpaisaje WHERE id_paisajeFavPaisaje = :idpaisaje AND id_usuarioFavPaisaje = :idusuario';
        $stmt = $pdo->prepare($sql);
        $p = [':idpaisaje'=>$idPaisaje, ':idusuario'=>$idUsuario];
        $stmt->execute($p);
        echo "Se ha borrado con existo";
        exit();
    }


?>