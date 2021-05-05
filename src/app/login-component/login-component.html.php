<?php

session_start();
require_once '..\..\..\includes\db.inc.php';
$error = '';
$success = '';

if(isset($_POST['submit'])){
	if(isset($_POST['mail'],$_POST['password']) && !empty($_POST['mail']) && !empty($_POST['password'])){
		
        $email = trim($_POST['mail']);
		$password = trim($_POST['password']);
 
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			
            $sql = "SELECT * FROM usuario WHERE email = :mail ";
			$handle = $pdo->prepare($sql);
			$params = ['mail'=>$email];
			$handle->execute($params);

			if($handle->rowCount() > 0){
				
                $getRow = $handle->fetch(PDO::FETCH_ASSOC);
                echo '<p>'.$getRow['contrasenya'].'</p>';

		        if(password_verify($password, $getRow['contrasenya'])){
					unset($getRow['contrasenya']);
					$_SESSION['usu'] = $getRow['email'];
                    $_SESSION['id'] = $getRow['id_usuario'];
					header('location: ..\..\..\index.html.php');
					exit();
				} else {
					$error .= "- orreo o contraseña equivocada -";
				}
			} else {
				$error .= "- Correo o contraseña equivocada -";
			}
			
		} else {
			$error .= "- Email invalido -";	
		}
 
	} else {
		$error .= "- Requiere email y contraseña -";	
	}
 
}

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
                <?php 
				if(!empty($error)){
				    echo '<div class="alert alert-danger">'.$error.'</div>';
				}
			    ?>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <input type="text" name="mail" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <div class="text-center w-100">
                        <button type="submit" name="submit" class="button w-100">LOG IN</button>
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
