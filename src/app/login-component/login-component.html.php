<?php
$error;
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <meta name="description" content="HTML5, CSS3">
    <meta name="author" content="Enrique Monterde">

    <link rel="shortcut icon" href="..\..\image\logo.JPG">
    <link rel="stylesheet" href="login-component.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5519d98401.js" crossorigin="anonymous"></script>

</head>

<body>
  
    <div class="modal-wrap">
        <div class="modal-bodies">
            <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">Inicia sesión</div>
                <?php if(!empty($error)){ ?>
                <div class="description"><?= $error ?></div>
                <?php } ?>
                <form action="..\..\..\includes\login.inc.php" method="post">
                    <input type="text" placeholder="Name or Email"/>
                    <input type="password" placeholder="Password"/>
                    <div class="text-center w-100">
                        <button type="submit" class="button w-100">LOG IN</button>
                    </div>
                </form>
                <div class="text-center">
                <br> 
                <a href="..\..\..\index.html.php"><div class="button">Volver</div></a>
                <a href="..\register-component\register-component.html.php"><div class="button">Crear una cuenta</div></a>
            </div>
        </div>
    </div>
</body>
</html>
