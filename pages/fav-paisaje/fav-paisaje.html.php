<div id="content">
    <h1 class="titulo"> 
        <img src="./src/image/icons8-national-park-64.png"></img>    
        Paisajes Favoritos
    </h1>

    <div class="content-paisajes">
        <?php 
        $filasPaisajes = 0;
        $numeroPaisaje = 0 ;
        foreach($paisajesfav as $paisaje){ $filasPaisajes = $filasPaisajes + 1; ?>
            <?php if($filasPaisajes == 1){ ?>
                <div class="row" style="margin-bottom: 3%">
            <?php } ?>
            <div class="col-4 paisaje">
                <img class="d-block mx-auto" name="<?= $paisaje['name'] ?>" src="<?= $paisaje['paisajeurl'] ?>"/>
                
                <input name="idPaisaje" value="<?= $paisaje['idpaisaje']?>" hidden/>
                <input name="idUsuario" value="<?= $_SESSION['id']?>" hidden/>
                <button name="bFavoritos" onclick="eliminarFavoritoPaisaje(<?= $numeroPaisaje ?>);" class="button w-100">
                    Eliminar <img src="./src/image/icons8-add-to-favorites-32.png" style="height: 20px; width: 20px"/>
                </button>
            </div>
            
            <?php if($filasPaisajes == 3){ ?>
                </div>
            <?php 
            $filasPaisajes = 0 ;}
            $numeroPaisaje = $numeroPaisaje + 1;  
            ?>
        <?php } ?>
    </div>
</div> <!-- content -->