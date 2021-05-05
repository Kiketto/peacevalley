<?php

require_once '../../../includes/db.inc.php';

if(isset($_POST['submit'])){
    if(isset($_POST['idmusica'],$_POST['idusuario'])){

        $idMusica = trim($_POST['idmusica']);
		$idUsuario = trim($_POST['idusuario']);

        $sql = 'SELECT `id_cancion`,`url`,`nombre`,`autor`,`urlsoundcloud` FROM `cancion` WHERE 1';

        $resultado = $pdo->query($sql);

        $sql = 'SELECT * FROM favmusica WHERE id_musicaFavMusica = :idmusica AND id_usuarioFavMusica = :idusuario';
        $stmt = $pdo->prepare($sql);
        $p = [':idmusica'=>$idMusica, ':idusuario'=>$idUsuario];
        $stmt->execute($p);
            
        if($stmt->rowCount() == 0){
            $sql = 'INSERT INTO favmusica (`id_usuarioFavMusica`,`id_musicaFavMusica`) VALUES (:idusuario, :idmusica)';
            $stmt = $pdo->prepare($sql);
            $p = [':idmusica'=>$idMusica, ':idusuario'=>$idUsuario];
            $stmt->execute($p);
            header('location: ../../../index.html.php?pageSelect=musica');
            exit();
            
        } else {
            header('location: ../../../index.html.php?pageSelect=musica');
            exit();
        }
    }
}

?>