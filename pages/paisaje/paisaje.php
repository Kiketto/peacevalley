<?php

include_once './includes/db.inc.php';

$sql = 'SELECT `id_paisaje`,`url`,`nombre` FROM `paisaje` WHERE 1';

$resultado = $pdo->query($sql);

foreach ($resultado as $row){
    $paisajes[] = array(
        'name' => $row['nombre'],
        'paisajeurl' => $row['url'],
        'idPaisaje' => $row['id_paisaje']
    );
}
  

include 'paisaje.html.php'

?>