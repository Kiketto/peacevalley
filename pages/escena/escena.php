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

$sql = 'SELECT e.id_escena, e.nombre, c.urlcanciondropbox, p.url FROM escena as e INNER JOIN cancion as c ON e.id_cancionEscena = c.id_cancion INNER JOIN paisaje as p ON e.id_paisajeEscena = p.id_paisaje ORDER BY RAND() LIMIT '.$start.', '.$limit;
$resultado = $pdo->query($sql);

foreach ($resultado as $row){
    $escenas[] = array(
        'idescena' => $row['id_escena'],
        'name' => $row['nombre'],
        'cancionurl' => $row['urlcanciondropbox'],
        'paisajeurl' => $row['url']
    );
}

include 'escena.html.php'

?>