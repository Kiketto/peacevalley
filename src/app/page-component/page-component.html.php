<?php

$arrayPages = [
    page (name:'escena',route:'src\pages\escena.html.php'),
    page (name:'comunidad',route:'src\pages\comunidad.html.php'),
    page (name:'contacto',route:'src\pages\contacto.html.php'),
    page (name:'musica',route:'src\pages\musica.html.php'),
];

$pageDefaultRoute = 'src\pages\escena.html.php';
$pageDefault = 'escena';
$pageRoute = '';

if($pageRoute == ''){
    include_once $pageDefaultRoute;
}

?>