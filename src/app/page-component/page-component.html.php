<?php

$arrayPages = array(
    'escena' => 'src\pages\escena.html.php',
    'comunidad' => 'src\pages\comunidad.html.php',
    'contacto' => 'src\pages\contacto.html.php',
    'musica' => 'src\pages\musica.html.php',
);

$pageDefaultRoute = $arrayPages['escena'];
$pageDefault = 'escena';
$pageRoute = '';

if($pageRoute == ''){
    include 'pages/escena/escena.html.php';
}

?>