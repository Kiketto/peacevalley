<?php

require_once '..\..\..\includes\db.inc.php';

$limit = 9;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$sql = 'SELECT * FROM formulario';
$resultado1 = $pdo->query($sql);
$numberOfResults = $resultado1->rowCount();
$pages = ceil($numberOfResults / $limit);

$Previous = $page - 1;
$Next = $page + 1;

try {
    $sql = 'SELECT `id_formulario`,`nombre`,`email`,`pregunta`,`detalles` FROM formulario LIMIT '.$start.', '.$limit;
    $resultado = $pdo->query($sql);

    foreach ($resultado as $row){
        $solicitudes[] = array(
            'name' => $row['nombre'],
            'mail' => $row['email'],
            'question' => $row['pregunta'],
            'details' => $row['detalles'],
            'idformulario' => $row['id_formulario']
        );
    }
} catch (Exception $e){
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Formulario Solucitudes</title>
    <meta name="description" content="HTML5, CSS3">
    <meta name="author" content="Enrique Monterde">

    <link rel="shortcut icon" href="..\..\image\logof.JPG">
    <link rel="stylesheet" href="..\..\css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5519d98401.js" crossorigin="anonymous"></script>
    <script src="..\..\js\main.js"></script>

</head>

<body>
  
    <div id="content">
        <h1 class="titulo"> 
            <img src="..\..\image\icons8-request-service-64.png"></img>    
            Formulario Solicitudes
        </h1>
        <div class="row">
              
              <?php 
        if(isset($solicitudes)){
        $numeroSolicitud = 0 ;
        foreach($solicitudes as $solicitud){
            ?>
           
        <div class="row" style="margin-bottom: 3%">
            <div class="col">
                <table class="tablaSolicitudes w-100">
                    <tr>
                        <th>
                            <p>Nombre: <?= $solicitud['name']; ?></p>
                            <p>Correo: <?= $solicitud['mail']; ?></p>
                            <p>Pregunta: <?= $solicitud['question']; ?></p>
                            <p hidden>id: <?= $solicitud['idformulario']; ?></p>
                        </th>
                    </tr>
                    <tr>
                        <td><strong>Detalles: </strong><?= $solicitud['details']; ?></td>
                    </tr>
                </table>
            </div>
            

                    
            <div class="col-1">
                <button name="bFavoritos" onclick="eliminarConsulta(<?= $numeroSolicitud ?>);" class="button h-100"  style="border: white 2px solid;">
                    <img src="..\..\image\icons8-trash-64.png"/>
                </button>
            </div>
        </div>
            
        <?php 
        }
        $numeroSolicitud = $numeroSolicitud + 1;} 
        ?>      
            
        </div>

        <!-- Paginacion -->
        <nav aria-label="Page navigation" id="nav">
            <ul class="pagination justify-content-center">
                
                <li class="page-item <?php if($page == 1){ echo 'disabled';}?>">
                    <a class="page-link" href="administrador-component.html.php?page=<?= $Previous ?>" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                
                    <?php if($page != 1){?>
                    <li class="page-item">
                        <a class="page-link" href="administrador-component.html.php?page=<?= $page - 1 ?>"><?= $page - 1 ?></a>
                    </li>
                    <?php } ?>
                    <li class="page-item active">
                        <a class="page-link" href="administrador-component.html.php?page=<?= $page ?>"><?= $page ?></a>
                    </li>
                    <?php if($page != $pages){?>
                    <li class="page-item">
                        <a class="page-link" href="administrador-component.html.php?page=<?= $page + 1 ?>"><?= $page + 1 ?></a>
                    </li>
                    <?php } ?>


                <li class="page-item <?php if($page == $pages){ echo 'disabled';}?>">
                    <a class="page-link" href="administrador-component.html.php?page=<?= $Next ?>">Next</a>
                </li>
            </ul>
        </nav>
        <div class="row">
            <div class="text-center"> 
                <a href="..\..\..\index.html.php"><div class="button">Volver</div></a>
            </div>
        </div>
    </div>
</body>
</html>
