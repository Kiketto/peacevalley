<?php
    session_start();
    unset($_SESSION['usu']);
    header('Location:../index.html.php');
    exit();
