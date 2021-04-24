<?php

$pageSelect = 'escena';
if(isset($_GET['pageSelect'])){
    $pageSelect = $_GET['pageSelect'];
}

$arrayPages = array(
    'escena' => './pages/escena/escena.html.php',
    'comunidad' => './pages/paisaje/paisaje.html.php',
    'musica' => './pages/musica/musica.html.php',
);

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Peace Valley</title>
    <meta name="description" content="HTML5, CSS3">
    <meta name="author" content="Enrique Monterde">

    <link rel="shortcut icon" href="./src/image/logof.JPG">
    <link rel="stylesheet" href="./src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5519d98401.js" crossorigin="anonymous"></script>
    <script src="src\js\script.js"></script>
</head>
<body>
    
	<div id="page" class="container">
        <?php include_once './src/app/header-component/header-component.html.php' ?>

		<?php include_once $arrayPages[$pageSelect] ?>

		<?php include_once './src/app/footer-component/footer-component.html.php' ?>

	</div> <!-- page -->

</body>
</html>