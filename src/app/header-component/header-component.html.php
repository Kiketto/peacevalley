<div id="header">
    <div class="letrero" name="letrero">
        <marquee id="marco"><p>Registrate en el Peace Valley para poder crear escenas o guardarlas en favoritos!</p></marquee></div>
    <div class="row header-top ">
        <div class="col-1"></div>
        <div class="col"></div>
        <div class="col-1" style="text-align: right" hidden><a href="#">Lista</a></div>
        <div class="col-2" style="text-align: center"><a href="./src/app/login-component/login-component.html.php">Iniciar sesión</a></div>
        
    </div>
    <div id="header-bottom" class="row menu border-bottom-gradient">
        
        <div class="col-1 option" name="logo">
            <img src="./src/image/logof.JPG" class="logo"/>
        </div>
        <div class="col-2 option up-red" name="escena">
            <p><a href="index.html.php?pageSelect=escena">Escenas</a></p>
        </div>
        <div class="col-2 option up-orange" name="musica">
            <p><a href="index.html.php?pageSelect=musica">Música</a></p>
        </div>
        <div class="col-2 option up-green" name="paisaje">
            <p><a href="index.html.php?pageSelect=paisaje">Paisajes</a></p>
        </div>
        <div class="col-2 option up-blue" name="about">
            <div class="option-about">
                <p><a href="#">Sobre</a></p>
            </div>
            <div class="row optionAbout" name="contact" style="display: none">
                <p><a href="index.html.php?pageSelect=contacto">Contacto</a></p>
            </div>
            <div class="row optionAbout" name="FAQ" style="display: none">
                <p><a href="index.html.php?pageSelect=FAQ">FAQ</a></p>
            </div>
            <div class="row optionAbout" name="developter" style="display: none">
                <p><a href="index.html.php?pageSelect=developter">Desarrollador</a></p>
            </div>
        </div>
        <div class="col-3 option buscador up-blue-purple">
            <form action="" method="POST" class="row buscador">
                <input type="search" name="buscar" id="bs" class="col" value="Buscador" placeholder="Buscar las escenas"/>
            </form>

        </div>     
        
    </div>

</div>