<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['questiontitle'];
    $questionDetails = $_POST['questiondetails'];

    $mailTo = "pv.peacevalley@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Has recibido un e-mail de ".$name.".\n\n".$questionDetails;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ..\..\index.html.php?pageSelect=contacto");
}

?>