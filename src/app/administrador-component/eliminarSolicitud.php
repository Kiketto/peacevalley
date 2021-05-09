<?php

require_once '..\..\..\includes\db.inc.php';

    $idSolicitud = trim($_REQUEST['idsolicitud']);

    $sql = 'SELECT * FROM formulario WHERE id_formulario = :idsolicitud';
    $stmt = $pdo->prepare($sql);
    $p = [':idsolicitud'=>$idSolicitud ];
    $stmt->execute($p);
        
    if($stmt->rowCount() != 0) {
        $sql = 'DELETE FROM formulario WHERE id_formulario = :idsolicitud';
        $stmt = $pdo->prepare($sql);
        $p = [':idsolicitud'=>$idSolicitud];
        $stmt->execute($p);
    }
?>