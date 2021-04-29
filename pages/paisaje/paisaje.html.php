<div id="content">
    <h1 class="titulo"> 
        <img src="./src/image/icons8-national-park-64.png"></img>    
        Paisajes
    </h1>

    <div class="content-paisajes">
        <?php $filasPaisajes = 0; ?>
        <?php foreach($paisajes as $paisaje){ $filasPaisajes = $filasPaisajes + 1; ?>
            <?php if($filasPaisajes == 1){ ?>
                <div class="row fila-paisajes">
            <?php } ?>
            <div class="col paisaje">
                <img class="d-block mx-auto" name="<?= $paisaje['name'] ?>" src="<?= $paisaje['paisajeurl'] ?>"/>
            </div>
            <?php if($filasPaisajes == 3){ ?>
                </div>
            <?php $filasPaisajes = 0 ;} ?>
        <?php } ?>
    </div>
</div> <!-- content -->
