<div id="content">
    <h1 class="titulo">
        <img src="./src/image/icons8-national-park-64.png"></img>
        Paisajes
    </h1>

    <div class="content-paisajes">
        <?php
        if (isset($paisajes)) {
            $filasPaisajes = 0;
            $numeroPaisaje = 0;
            foreach ($paisajes as $paisaje) {
                $filasPaisajes = $filasPaisajes + 1; ?>
                <?php if ($filasPaisajes == 1) { ?>
                    <div class="row" style="margin-bottom: 3%">
                    <?php } ?>
                    <div class="col-4 paisaje">
                        <img class="d-block mx-auto" name="<?= $paisaje['name'] ?>" src="<?= $paisaje['paisajeurl'] ?>" />

                        <input name="idPaisaje" value="<?= $paisaje['idPaisaje'] ?>" hidden />

                        <?php
                        if (isset($_SESSION['id'])) {
                        ?>
                            <input name="idUsuario" value="<?= $_SESSION['id'] ?>" hidden />
                            <button name="bFavoritos" onclick="anyadirFavoritoPaisaje(<?= $numeroPaisaje ?>);" class="button w-100">
                                Favoritos <img src="./src/image/icons8-add-to-favorites-32.png" style="height: 20px; width: 20px" />
                            </button>
                        <?php } ?>
                    </div>
                    <?php if ($filasPaisajes == 3) { ?>
                    </div>
                <?php
                        $filasPaisajes = 0;
                    }
                    $numeroPaisaje = $numeroPaisaje + 1;
                ?>
        <?php }
        } else {
            echo 'En esta pagina no hay paisajes, vuelve hacia atras y por favor no manipule la URL';
        } ?>
    </div>
    <!-- Paginacion -->
    <nav aria-label="Page navigation" id="nav">
        <ul class="pagination justify-content-center">

            <li class="page-item <?php if ($page == 1) {
                                        echo 'disabled';
                                    } ?>">
                <a class="page-link" href="index.php?pageSelect=paisaje&page=<?= $Previous ?>" tabindex="-1" aria-disabled="true">Previous</a>
            </li>

            <?php if ($page != 1) { ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?pageSelect=paisaje&page=<?= $page - 1 ?>"><?= $page - 1 ?></a>
                </li>
            <?php } ?>
            <li class="page-item active">
                <a class="page-link" href="index.php?pageSelect=paisaje&page=<?= $page ?>"><?= $page ?></a>
            </li>
            <?php if ($page != $pages) { ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?pageSelect=paisaje&page=<?= $page + 1 ?>"><?= $page + 1 ?></a>
                </li>
            <?php } ?>


            <li class="page-item <?php if ($page == $pages) {
                                        echo 'disabled';
                                    } ?>">
                <a class="page-link" href="index.php?pageSelect=paisaje&page=<?= $Next ?>">Next</a>
            </li>
        </ul>
    </nav>
</div> <!-- content -->