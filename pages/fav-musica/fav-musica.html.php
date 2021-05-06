<div id="content">
    <h1 class="titulo"> 
        <img src="./src/image/icons8-musical-notes-64.png"></img>    
        Musica
    </h1>
    <div class="content-music">
<?php $filasCanciones = 0; ?>
        <?php foreach($cancionesfav as $cancionfav){ $filasCanciones = $filasCanciones + 1; ?>
            <?php if($filasCanciones == 1){ ?>
                <div class="row" style="margin-bottom: 3%">
            <?php } ?>
            <div class="col">
            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="<?= $cancionfav['cancionurl'] ?>"></iframe>
                <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                    <a href="https://soundcloud.com/peace-valley-548309094" title="<?= $cancionfav['cancionautor'] ?>" target="_blank" style="color: #cccccc; text-decoration: none;"><?= $cancionfav['cancionautor'] ?></a> 
                    -- 
                    <a href="<?= $cancionfav['cancionurlnombre'] ?>" title="<?= $cancionfav['name'] ?>" target="_blank" style="color: #cccccc; text-decoration: none;"><?= $cancionfav['name'] ?></a>
                    </form>
                </div>
            </div>
            <?php if($filasCanciones == 3){ ?>
                </div>
            <?php $filasCanciones = 0 ;} ?>
        <?php } ?>
    </div>