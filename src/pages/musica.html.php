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
    <script src="js/script.js"></script>
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
            <p class="titulo background-musica">
                <svg viewBox="0 0 970 200">
                    <symbol id="s-text">
                        <text text-anchor="middle" x="50%" y="80%">Música</text>
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
            <div class="content-music">
                <table class="table-music table-striped">
                    <tr class="m">
                        <td>
                            <h3>Autor</h3>
                        </td>
                        <td>
                            <h3>Título</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Alexey Anisimov</td>
                        <td> Lo-fi_Hip-hop.</td>
                        <td>
                            <audio src="../music/Alexey_Anisimov_-_Hip-Hop_Lo-Fi.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Alexey Anisimov</td>
                        <td> Lo-fi_Chill-hop.</td>
                        <td>
                            <audio src="../music/Alexey_Anisimov_-_Lo-Fi_Chill_Hop.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Alexey Anisimov</td>
                        <td> Lo-fi_Hip-RnB.</td>
                        <td>
                            <audio src="../music/Alexey_Anisimov_-_Lo-Fi_Chill_RnB.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Alpha Red</td>
                        <td>DoingYoThangInst</td>
                        <td>
                            <audio src="../music/Alpha_Red_-_Doing_Yo_Thang__Inst._.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Antonio Marrero</td>
                        <td>Interdimensional</td>
                        <td>
                            <audio src="../music/Antonio_Marrero_-_Interdimensional.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Cleric</td>
                        <td>Lo-fi_Dreamy</td>
                        <td>
                            <audio src="../music/Cleric_-_Lo-Fi_Dreamy.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Ed Napoli</td>
                        <td>Mirage</td>
                        <td>
                            <audio src="../music/Ed_Napoli_-_Mirage.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Ed Napoli</td>
                        <td>Sunset</td>
                        <td>
                            <audio src="../music/Ed_Napoli_-_Sunset.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Feeblom</td>
                        <td> Piano Selected</td>
                        <td>
                            <audio src="../music/Feeblom_-_Piano_Selected.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>GrayMic</td>
                        <td>A Walk in the park</td>
                        <td>
                            <audio src="../music/GrayMic_-_A_Walk_in_the_Park.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Grumpynora</td>
                        <td> Lo fied Chicken</td>
                        <td>
                            <audio src="../music/Grumpynora_-_Lo_fied_Chicken.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Joystock</td>
                        <td> Coffee Break</td>
                        <td>
                            <audio src="../music/Joystock_-_Coffee_Break.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                    <tr>
                        <td>Joystock</td>
                        <td> Lofi Chillout Hip Hop Beat</td>
                        <td>
                            <audio src="../music/Joystock_-_Lofi_Chillout_Hip_Hop_Beat.mp3" id="audio" controls></audio>
                        </td>
                    </tr>
                </table>
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
</body>
</html>