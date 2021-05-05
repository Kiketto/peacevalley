<?php

include_once './includes/db.inc.php';

$sql = 'SELECT `id_cancion`,`url`,`nombre`,`autor`,`urlsoundcloud` FROM `cancion` WHERE 1';

$resultado = $pdo->query($sql);

foreach ($resultado as $row){
    $canciones[] = array(
        'name' => $row['nombre'],
        'cancionurl' => $row['url'],
        'cancionautor' => $row['autor'],
        'cancionurlnombre' => $row['urlsoundcloud'],
        'idcancion' => $row['id_cancion']
    );
}
  

include 'musica.html.php'

?>