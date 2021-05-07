<div id="content">
    <h1 class="titulo"> 
        <img src="./src/image/icons8-musical-notes-64.png"></img>    
        Musica
    </h1>
    <div class="content-music">

        <?php 
            $filasCanciones = 0;
            $numeroMusica = 0 ;
            foreach($canciones as $cancion){ $filasCanciones = $filasCanciones + 1;
                if($filasCanciones == 1){ 
        ?>
                    <div class="row pagination__list" style="margin-bottom: 3%">
                <?php } ?>
            
            <div class="col-4 pagination__item">
            <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="<?= $cancion['cancionurl'] ?>"></iframe>
                <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                    <input name="idMusica" value="<?= $cancion['idcancion']?>" hidden/>
                    
                    <?php   
                    if(isset($_SESSION['id'])){ 
                    ?>
                        <input name="idUsuario" value="<?= $_SESSION['id']?>" hidden/>
                        <button name="bFavoritos" onclick="anyadirFavoritoMusica(<?= $numeroMusica ?>);" class="button w-100">
                            Favoritos <img src="./src/image/icons8-add-to-favorites-32.png" style="height: 20px; width: 20px"/>
                        </button>
                    <?php } ?>

                    <a href="https://soundcloud.com/peace-valley-548309094" title="<?= $cancion['cancionautor'] ?>" target="_blank" style="color: #cccccc; text-decoration: none;"><?= $cancion['cancionautor'] ?></a> 
                    -- 
                    <a href="<?= $cancion['cancionurlnombre'] ?>" title="<?= $cancion['name'] ?>" target="_blank" style="color: #cccccc; text-decoration: none;"><?= $cancion['name'] ?></a>
                </div>
            </div>
            <?php if($filasCanciones == 3){ ?>
                </div>
            <?php 
            $filasCanciones = 0 ;}
            $numeroMusica = $numeroMusica + 1;
            ?>
        <?php } ?>
    </div>
    <nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="index.html.php?pageSelect=musica&page=<?= $Previous ?>" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
                <?php for ($i = 1; $i <= $pages; $i++) {?>
    <li class="page-item"><a class="page-link" href="index.html.php?pageSelect=musica&page=<?= $i ?>"><?= $i ?></a></li>
                    <?php } ?>
    <li class="page-item">
      <a class="page-link" href="index.html.php?pageSelect=musica&page=<?= $Next ?>">Next</a>
    </li>
  </ul>
</nav>
</div> <!-- content -->



