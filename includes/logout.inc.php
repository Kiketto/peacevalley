
<?php
session_start();
if(isset($_SESSION['usu'])){
    session_destroy();
    header('Location: ../index.html.php');
    exit();
}
?>
