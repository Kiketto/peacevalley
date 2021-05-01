<?php 

if(isset($_POST['submit'])){
    $userName = $_POST['username'];
    $userMail = $_POST['mail'];
    $userPassword = $_POST['password'];
    $userConfirmPassword = $_POST['confirmpassword'];

    require_once './db.inc.php';

} else {
    
}

?>