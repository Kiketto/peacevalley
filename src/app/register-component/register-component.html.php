<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <meta name="description" content="HTML5, CSS3">
    <meta name="author" content="Enrique Monterde">

    <link rel="shortcut icon" href="..\..\image\logo.JPG">
    <link rel="stylesheet" href="register-component.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
  
    <div class="modal-wrap">
        <div class="modal-bodies">
            <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">Registrate</div>
                <?php if(!empty($error)){ ?>
                <div class="description"><?= $error ?></div>
                <?php } ?>
                <form action="..\..\..\includes\register.inc.php" method="post">
                    <input type="text" name="username" placeholder="Username"/>
                    <input type="email" name="mail" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <input type="password" name="confirmpassword" placeholder="confirmed password"/>
                    <div class="text-center w-100">
                        <button class="button w-100" type="submit" name="submit">REGISTER IN</button>
                    </div>
                </form>
                <br>
                <a href="..\..\..\index.html.php"><div class="button">Volver</div></a>
                <a href="..\login-component\login-component.html.php"><div class="button">Tengo una cuenta</div></a>
            </div>
        </div>
    </div>
</body>
</html>