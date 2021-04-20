<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Peace Valley</title>
    <meta name="description" content="HTML5, CSS3">
    <meta name="author" content="Enrique Monterde">

    <link rel="shortcut icon" href="../imgs/logof.JPG">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5519d98401.js" crossorigin="anonymous"></script>

</head>
<body>

	<div id="page" class="container">

		<div id="header">
            <div class="row header-top ">
                <div class="col-1"></div>
                <div class="col"><marquee id="marco"><p>Registrate en el Peace Valley para poder crear escenas o guardarlas en favoritos!</p></marquee></div>
                <div class="col-1"><a href="#">Support</a></div>
                <div class="col-1"><a href="login.html">Login</a></div>
                
            </div>
            <div id="header-bottom" class="row menu">
                
                <div class="col-1 option border-bottom-gradient border-purple-red">
                    <img src="../imgs/logof.JPG" class="logo"/>
                </div>
                <div class="col-2 option border-bottom-gradient border-red-orange up-red-orange">
                    <p><a href="../index.html">Escenas</a></p>
                </div>
                <div class="col-2 option border-bottom-gradient border-orange-yellow up-orange-yellow">
                    <p><a href="musica.html">Música</a></p>
                </div>
                <div class="col-2 option border-bottom-gradient border-yellow-green up-yellow-green">
                    <p><a href="comunidad.html">Comunidad</a></p>
                </div>
                <div class="col-2 option border-bottom-gradient border-green-blue up-green-blue">
                    <p><a href="contacto.html">Contacto</a></p>
                </div>
                <div class="col-3 option buscador border-bottom-gradient border-blue-purple up-blue-purple">
                    <form action="" method="POST" class="row buscador">
                        <input type="search" name="buscar" id="bs" class="col" value="Buscador" placeholder="Buscar las escenas"/>
                    </form>

                </div>     
                
            </div>
        
        </div>

		<div id="content">
            <p class="titulo background-comunidad">
                <svg viewBox="0 0 970 200">
                    <symbol id="s-text">
                        <text text-anchor="middle" x="50%" y="80%">Comunidad</text>
                    </symbol>
                
                    <g class = "g-ants">
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                    </g>
                </svg>
            </p>
            <div class="content-comunidad modal-wrap">
                <div class="modal-bodies">
                    <div class="modal-body is-showing">
                        <div class="title">Foro</div>
                        <div class="description">Debes iniciar sesión.</div>
                        <form>
                            <div class="text-center">
                                <a href="login.html"><div class="button">LOG IN</div></a>
                                <a href="register.html"><div class="button">Create an account</div></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

		</div> <!-- content -->

		<div id="footer" class="background-contacto">
            <p>Peace Valley - <a href="contacto.html">Contacto</a></p>
            <p>enmonterde@gmail.com - 666 78 56 78</p>
            <p>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-google-plus-square"></i>
                <i class="fas fa-share-square"></i>
            </p>
		</div>

	</div> <!-- page -->

    <script src="./js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>