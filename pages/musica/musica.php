<?php

include_once './includes/db.inc.php';

$limit = 9;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$sql = 'SELECT * FROM `cancion`';
$resultado1 = $pdo->query($sql);
$numberOfResults = $resultado1->rowCount();
$pages = ceil($numberOfResults / $limit);

$Previous = $page - 1;
$Next = $page + 1;

try {
$sql = 'SELECT `id_cancion`,`url`,`nombre`,`autor`,`urlsoundcloud` FROM `cancion` LIMIT '.$start.', '.$limit;
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
} catch (Exception $e){
}


include 'musica.html.php'

?>