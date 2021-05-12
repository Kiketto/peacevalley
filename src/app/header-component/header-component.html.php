<div id="header">
    <div class="letrero" name="letrero">
        <marquee id="marco">
            <p>Registrate en el Peace Valley para poder crear escenas o guardarlas en favoritos!</p>
        </marquee>
    </div>
    <div class="row header-top ">
        <div class="col-1"></div>
        <div class="col"></div>
        <div class="col-1" style="text-align: right" hidden><a href="#">Lista</a></div>
        <div class="col-4" name="usuario" style="text-align: right;">

            <div class="option-usuario">
                <?php if (isset($_SESSION['usu'])) { ?>
                    <p><a href="#"><?= $_SESSION['usu'] ?> </a>
                        <img style="height: 15px; width: 15px;" name="listfav" onclick="<?php if (isset($_SESSION['usu']) && $_SESSION['usu'] == 'pv.peacevalley@administrador.com') {
                                                                                            echo 'desplegableMenuOpcionesAdministracion();';
                                                                                        } else {
                                                                                            echo 'desplegableMenuOpcionesUsuario();';
                                                                                        } ?>" src="./src/image/icons8-expand-arrow-32.png" />
                    </p>
                <?php
                } ?>
            </div>

            <?php if (isset($_SESSION['usu']) && $_SESSION['usu'] !== 'pv.peacevalley@administrador.com') { ?>
                <div class="row optionUsuario" name="favMusica" style="display: none">
                    <p><a href="index.php?pageSelect=favmusica">Música favorita</a></p>
                </div>

                <div class="row optionUsuario" name="favPaisaje" style="display: none">
                    <p><a href="index.php?pageSelect=favpaisaje">Paisajes favoritos</a></p>
                </div>

                <div class="row optionUsuario" name="favEscena" style="display: none">
                    <p><a href="index.php?pageSelect=favescena">Escenas favoritas</a></p>
                </div>
            <?php } else { ?>
                <div class="row optionUsuario" name="administracionContacto" style="display: none">
                    <p><a href="./src/app/administrador-component/administrador-component.html.php">Solicitudes Formulario</a></p>
                </div>
            <?php } ?>
        </div>


        <?php if (isset($_SESSION['usu'])) { ?>
            <div class="col-2" style="text-align: center"><a href="./includes/logout.inc.php">Desconectar</a></div>
        <?php } else { ?>
            <div class="col-2" style="text-align: center"><a href="./src/app/login-component/login-component.html.php">Iniciar sesión</a></div>
        <?php } ?>

        <div id="header-bottom" class="row menu border-bottom-gradient">

            <div class="col-1 option" name="logo">
                <img src="./src/image/logof.JPG" class="logo" />
            </div>
            <div class="col-2 option up-red" name="escena">
                <p><a href="index.php?pageSelect=escena">Escenas</a></p>
            </div>
            <div class="col-2 option up-orange" name="musica">
                <p><a href="index.php?pageSelect=musica">Música</a></p>
            </div>
            <div class="col-2 option up-green" name="paisaje">
                <p><a href="index.php?pageSelect=paisaje">Paisajes</a></p>
            </div>
            <div class="col-2 option up-blue" name="about">
                <div class="option-about">
                    <p><a href="#">Sobre</a></p>
                </div>
                <div class="row optionAbout" name="contact" style="display: none">
                    <p><a href="index.php?pageSelect=contacto">Contacto</a></p>
                </div>
                <div class="row optionAbout" name="FAQ" style="display: none">
                    <p><a href="index.php?pageSelect=FAQ">FAQ</a></p>
                </div>
                <div class="row optionAbout" name="developter" style="display: none">
                    <p><a href="index.php?pageSelect=developter">Desarrollador</a></p>
                </div>
            </div>
            <div class="col-3 option buscador up-blue-purple">
                <form action="" method="POST" class="row buscador">
                    <input type="search" name="buscar" id="bs" class="col" value="Buscador" placeholder="Buscar las escenas" />
                </form>

            </div>

        </div>

    </div>