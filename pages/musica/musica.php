<?php

include_once './includes/db.inc.php';

$limit = 12;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page -1) * $limit;

$sql = 'SELECT `id_cancion`,`url`,`nombre`,`autor`,`urlsoundcloud` FROM `cancion` LIMIT '.$start.', '.$limit;
$resultado = $pdo->query($sql);

$sql = 'SELECT count(`id_cancion`) AS id FROM `cancion`';
$resultado1 = $pdo->query($sql);
$total = $resultado1->rowCount();
$pages = ceil($total / $limit);

 if($page == $pages){
			$Next = 1;
		 $Next = ($Next);
			}
if($page == 1){
			$Previous = $pages;
		 $Previous = ($Previous);
			}

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