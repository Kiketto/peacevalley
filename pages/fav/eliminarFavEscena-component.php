<?php

require_once '../../includes/db.inc.php';

    $idEscena = trim($_REQUEST['idescena']);
    $idUsuario = trim($_REQUEST['idusuario']);

    $sql = 'SELECT * FROM favescena WHERE id_escenaFavEscena = :idescena AND id_usuarioFavEscena = :idusuario';
    $stmt = $pdo->prepare($sql);
    $p = [':idescena'=>$idEscena, ':idusuario'=>$idUsuario];
    $stmt->execute($p);
        
    if($stmt->rowCount() != 0) {
        $sql = 'DELETE FROM favescena WHERE id_escenaFavEscena = :idescena AND id_usuarioFavEscena = :idusuario';
        $stmt = $pdo->prepare($sql);
        $p = [':idescena'=>$idEscena, ':idusuario'=>$idUsuario];
        $stmt->execute($p);
    }
?>