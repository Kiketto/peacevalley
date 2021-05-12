<?php
session_start();

$pageSelect = 'escena';
if (isset($_GET['pageSelect'])) {
    $pageSelect = $_GET['pageSelect'];
}

$arrayPages = array(
    'escena' => './pages/escena/escena.php',
    'paisaje' => './pages/paisaje/paisaje.php',
    'musica' => './pages/musica/musica.php',
    'contacto' => './pages/contact/contact.html.php',
    'FAQ' => './pages/faq/faq.html.php',
    'developter' => './pages/developter/developter.html.php',
    'favmusica' => './pages/fav-musica/fav-musica.php',
    'favpaisaje' => './pages/fav-paisaje/fav-paisaje.php',
    'favescena' => './pages/fav-escena/fav-escena.php'
);

include 'index.html.php';
