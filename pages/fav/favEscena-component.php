<?php

require_once '../../includes/db.inc.php';

    $idEscena = trim($_REQUEST['idEscena']);
    $idUsuario = trim($_REQUEST['idUsuario']);

    $sql = 'SELECT * FROM favescena WHERE id_escenaFavEscena = :idescena AND id_usuarioFavEscena = :idusuario';
    $stmt = $pdo->prepare($sql);
    $p = [':idescena'=>$idEscena, ':idusuario'=>$idUsuario];
    $stmt->execute($p);
        
    if($stmt->rowCount() == 0){
        $sql = 'INSERT INTO favescena (`id_usuarioFavEscena`,`id_escenaFavescena`) VALUES (:idusuario, :idescena)';
        $stmt = $pdo->prepare($sql);
        $p = [':idescena'=>$idEscena, ':idusuario'=>$idUsuario];
        $stmt->execute($p);
        echo "Se ha añadido con existo";
        exit();   
    }

?>