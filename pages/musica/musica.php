<?php

include_once './includes/db.inc.php';

$sql = 'SELECT `url`,`nombre`,`autor`,`urlsoundcloud` FROM `cancion` WHERE 1';

$resultado = $pdo->query($sql);

foreach ($resultado as $row){
    $canciones[] = array(
        'name' => $row['nombre'],
        'cancionurl' => $row['url'],
        'cancionautor' => $row['autor'],
        'cancionurlnombre' => $row['urlsoundcloud']
    );
}
  

include 'musica.html.php'

?>