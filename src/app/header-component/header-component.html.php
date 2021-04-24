<script src="header-component.js"></script>
<div id="header">
    <div class="row header-top ">
        <div class="col-1"></div>
        <div class="col"><marquee id="marco"><p>Registrate en el Peace Valley para poder crear escenas o guardarlas en favoritos!</p></marquee></div>
        <div class="col-1"><a href="#" hidden>Lista</a></div>
        <div class="col-1"><a href="pages/login.html">Login</a></div>
        
    </div>
    <div id="header-bottom" class="row menu">
        
        <div class="col-1 option border-bottom-gradient border-purple-red" name="logo">
            <img src="src\image\logof.JPG" class="logo"/>
        </div>
        <div class="col-2 option border-bottom-gradient border-red-orange up-red-orange" name="escena">
            <p><a href="index.html.php?pageSelect=escena">Escena</a></p>
        </div>
        <div class="col-2 option border-bottom-gradient border-orange-yellow up-orange-yellow" name="musica">
            <p><a href="index.html.php?pageSelect=musica">Música</a></p>
        </div>
        <div class="col-2 option border-bottom-gradient border-yellow-green up-yellow-green" name="paisaje">
            <p><a href="index.html.php?pageSelect=paisaje">Paisaje</a></p>
        </div>
        <div class="col-2 option border-bottom-gradient border-green-blue up-green-blue" name="about">
            <p><a href="#">About</a></p>
        </div>
        <div class="col-3 option buscador border-bottom-gradient border-blue-purple up-blue-purple">
            <form action="" method="POST" class="row buscador">
                <input type="search" name="buscar" id="bs" class="col" value="Buscador" placeholder="Buscar las escenas"/>
            </form>

        </div>     
        
    </div>

</div>