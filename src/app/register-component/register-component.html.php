<?php 

session_start();
require_once '../../../includes/db.inc.php';
$error = '';
$success = '';

if(isset($_POST['submit'])){
    
    if(isset($_POST['username'],$_POST['mail'],$_POST['confirmpassword'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['confirmpassword']) && !empty($_POST['mail']) && !empty($_POST['password'])){
        
        $userName = trim($_POST['username']);
        $mail = trim($_POST['mail']);
        $userPassword = trim($_POST['password']);
        $confirmPassword = trim($_POST['confirmpassword']);
        
        $options = array("cost"=>4);
        $hashPassword = password_hash($userPassword,PASSWORD_BCRYPT,$options);
 
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $sql = 'SELECT * FROM usuario WHERE email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$mail];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0){
                
                if($confirmPassword == $userPassword){
                    $sql = "INSERT INTO usuario (nombre, email, `contrasenya`) VALUES (:fname,:email,:pass)";
                
                    try{
                        $handle = $pdo->prepare($sql);
                        $params = [
                            ':fname'=>$userName,
                            ':email'=>$mail,
                            ':pass'=>$hashPassword,
                        ];
                        
                        $handle->execute($params);
                        $success .= 'User has been created successfully';  
                    }
                    catch(PDOException $e){
                        $error .= $e->getMessage();
                    } 
                } else {
                        $error .= '- La contraseña y su confirmacion no son iguales -';
                }
                
            } else {
                $error .= '- El email ya esta registrado -';
            }

        } else {
            $error .= "- El email no es valido -";
        }

    } else {
        if(!isset($_POST['username']) || empty($_POST['username'])){
            $error .= '- El nombre de usuario es obligatorio -';
        }
        if(!isset($_POST['mail']) || empty($_POST['mail'])){
            $error .= '- Requiere un email -';
        }
        if(!isset($_POST['password']) || empty($_POST['password'])){
            $error .= '- Requiere una contraseña -';
        }
        if(!isset($_POST['confirmpassword']) || empty($_POST['confirmpassword'])){
                $error .= '- Necesitas confirmar la contraseña -';
        }   
    }
}
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <meta name="description" content="HTML5, CSS3">
    <meta name="author" content="Enrique Monterde">

    <link rel="shortcut icon" href="../../image/logof.JPG">
    <link rel="stylesheet" href="register-component.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
  
    <div class="modal-wrap">
        <div class="modal-bodies">
            <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">Registrate</div>
                <?php 
				if(!empty($error)){
				    echo '<div class="alert alert-danger">'.$error.'</div>';
				}
                
                if(!empty($success)){
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			    ?>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <input type="text" name="username" placeholder="Username"/>
                    <input type="email" name="mail" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <input type="password" name="confirmpassword" placeholder="confirmed password"/>
                    <div class="text-center w-100">
                        <button class="button w-100" type="submit" name="submit">REGISTER IN</button>
                    </div>
                </form>
                <br>
                <a href="../../../index.html.php"><div class="button">Volver</div></a>
                <a href="../login-component/login-component.html.php"><div class="button">Tengo una cuenta</div></a>
            </div>
        </div>
    </div>
</body>
</html>