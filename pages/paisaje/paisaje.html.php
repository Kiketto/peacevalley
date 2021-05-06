<div id="content">
    <h1 class="titulo"> 
        <img src="./src/image/icons8-national-park-64.png"></img>    
        Paisajes
    </h1>

    <div class="content-paisajes">
        <?php 
        $filasPaisajes = 0; 
        $numeroPaisaje = 0 ;
        foreach($paisajes as $paisaje){ $filasPaisajes = $filasPaisajes + 1; ?>
            <?php if($filasPaisajes == 1){ ?>
                <div class="row" style="margin-bottom: 3%">
            <?php } ?>
            <div class="col paisaje">
                <img class="d-block mx-auto" name="<?= $paisaje['name'] ?>" src="<?= $paisaje['paisajeurl'] ?>"/>
            
                <input name="idPaisaje" value="<?= $paisaje['idPaisaje']?>" hidden/>
                    
                <?php   
                if(isset($_SESSION['id'])){ 
                ?>
                    <input name="idUsuario" value="<?= $_SESSION['id']?>" hidden/>
                    <button name="bFavoritos" onclick="anyadirFavoritoPaisaje(<?= $numeroPaisaje ?>);" class="button w-100">
                        Favoritos <img src="./src/image/icons8-add-to-favorites-32.png" style="height: 20px; width: 20px"/>
                    </button>
                <?php } ?>
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
