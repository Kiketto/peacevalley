<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Peace Valley</title>
    <meta name="description" content="HTML5, CSS3">
    <meta name="author" content="Enrique Monterde">

    <link rel="shortcut icon" href="../imgs/logof.JPG">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/loginstyle.css">
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
            <p class="titulo background-contacto">
                <svg viewBox="0 0 970 200">
                    <symbol id="s-text">
                        <text text-anchor="middle" x="50%" y="80%">Contacto</text>
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
<!-- aqui pruebas-->
            <section class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3092.5110409820845!2d-0.43970958464108834!3d39.18583517952723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61b03094124c85%3A0x5bedacf9e7f72a04!2sInstitut%20d&#39;Ensenyament%20Secundari%20Sant%20Vicent%20Ferrer!5e0!3m2!1ses!2ses!4v1614012571805!5m2!1ses!2ses" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
            
            <section class="main-content">
               <div class="row">
                    <div class="col-md-9">
                        <div class="ask-question-input">
                            <h4>Contacta con nosotros</h4>
                            <hr>
                            <form>
                                <div>
                                    <span class="form-description">Nombre de usuario* </span>
                                    <input type="text" name="fname" class="username" placeholder="Introduzca su nombre">  
                                </div>
                                <div class="email-part">
                                    <span class="form-description2">E-Mail* </span>
                                    <input type="text" name="fname" class="email" placeholder="Introduzca su Email">  
                                </div>
                                <div class="question-title3">
                                    <span class="form-description3">Título de la pregunta* </span>
                                    <input type="text" name="fname" class="question-title" placeholder="Escriba el título de su pregunta">
                                </div>
                                <div class="question-title3">
                                    <span class="form-description4">Detalles* </span>
                                    <textarea class="question-details" placeholder="Escriba la descripción detallada."></textarea>
                                </div>                     
                            </form>
                            <div class="publish-button">
                                <button type="button" class="publis">Publica tu pregunta</button>
                            </div>
                  
                        </div>
                
                    </div>

                </div>

            </section>

            <!--aqui acaban las pruebas-->
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