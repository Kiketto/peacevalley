<div id="content">
<div class="row">
    <h1 class="titulo col"> 
        <img src="./src/image/icons8-picture-in-picture-50.png" style="height: 64px; width: 64px"></img>    
        Escenas Favoritas
    </h1>
    <?php if(!isset($page) || $page == 1){ ?>
    <div class="col alert alert-success" name="alertMessage">
        <p>Si recargas la página recuerdar hacer click en "Vale".</p>
        <button type="button" class="btn btn-success" name="alertButton">Vale</button> 
    </div>
    <?php } ?>
</div>

    <div class="content-escenas">
        <?php 
        if(isset($escenasfav)){
            $filasEscenas = 0;
            $numeroEscena = 0 ;
            foreach($escenasfav as $escena){ $filasEscenas = $filasEscenas + 1;
                if($filasEscenas == 1){ 
        ?>
            <div class="row fila-escenas" style="margin-bottom: 3%">
        <?php } ?>
            
            <div class="col-4 escena">
                <div class="col escena">
            <img class="d-block mx-auto" onmouseover="musicaPlay('<?= $escena['name'].$escena['idescena'].$filasEscenas.$numeroEscena ?>');" onmouseout="musicaStop('<?= $escena['name'].$escena['idescena'].$filasEscenas.$numeroEscena ?>');" name="Escena" src="<?= $escena['paisajeurl'] ?>"/>
                    <audio name="<?= $escena['name'].$escena['idescena'].$filasEscenas.$numeroEscena ?>" src="<?= $escena['cancionurl']?>"></audio>
                </div>
            
                <input name="idEscena" value="<?= $escena['idescena']?>" hidden/>
                <?php   
                if(isset($_SESSION['id'])){ 
                ?>
                    <input name="idUsuario" value="<?= $_SESSION['id']?>" hidden/>
                        
                    <button name="bFavoritos" onclick="eliminarFavoritoEscena(<?= $numeroEscena ?>);" class="button w-100">
                        Eliminar <img src="./src/image/icons8-add-to-favorites-32.png" style="height: 20px; width: 20px"/>
                    </button>
                <?php } ?>
            </div>

            <?php if($filasEscenas == 3){ ?>
                </div>
            <?php 
            $filasEscenas = 0 ;}
            $numeroEscena = $numeroEscena + 1;
            ?>
        <?php }
        } else {
            echo 'En esta pagina no hay escenas, vuelve hacia atras y por favor no manipule la URL';
        } ?>
    </div>
</div>