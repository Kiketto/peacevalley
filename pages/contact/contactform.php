<?php

include_once '../../includes/db.inc.php';

if (isset($_POST['submit'])){ 
    if(isset ($_POST['name'],$_POST['email'],$_POST['questiontitle']) && !empty($_POST['name']) && !empty($_POST['questiontitle']) && !empty($_POST['email'])){
    
    $username = $_POST['name'];
    $mail = $_POST['email'];
    $question = $_POST['questiontitle'];
    $questionDetails = $_POST['questiondetails'];
    
    $sql = 'INSERT INTO formulario (nombre, email, pregunta, detalles) VALUES (:name,:email,:pregunta,:detalles)';

    $stmt = $pdo->prepare($sql);
    $p = [
        ':name'=>$username, 
        ':email'=>$mail,
        ':pregunta'=>$question,
        ':detalles'=>$questionDetails
    ];
    $stmt->execute($p);
    $success .= 'Formulario enviado correctamente';
    header("Location: ..\..\index.html.php?pageSelect=contacto");
    exit();
    
    } else {
    $error .= 'Es obligatorio rellenar el nombre, el email y el titulo de la pregunta.';
    }
}
?>