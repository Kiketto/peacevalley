<?php

include_once './includes/db.inc.php';

$limit = 9;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$sql = 'SELECT * FROM `paisaje`';
$resultado1 = $pdo->query($sql);
$numberOfResults = $resultado1->rowCount();
$pages = ceil($numberOfResults / $limit);

$Previous = $page - 1;
$Next = $page + 1;

$sql = 'SELECT `id_paisaje`,`url`,`nombre` FROM `paisaje` LIMIT '.$start.', '.$limit;
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