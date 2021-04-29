<div id="content">
    <h1 class="titulo"> 
        <img src="./src/image/icons8-contacts-64.png"></img>    
        Contacto
    </h1>
    
    <h3 class="subtitulo"> 
        <img src="./src/image/icons8-google-maps-old-32.png"></img>    
        Localización
    </h3>
    <section class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3092.5110409820845!2d-0.43970958464108834!3d39.18583517952723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61b03094124c85%3A0x5bedacf9e7f72a04!2sInstitut%20d&#39;Ensenyament%20Secundari%20Sant%20Vicent%20Ferrer!5e0!3m2!1ses!2ses!4v1614012571805!5m2!1ses!2ses" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <h3 class="subtitulo"> 
        <img src="./src/image/icons8-google-forms-32.png"></img>    
        Formulario de contacto
    </h3>
    <section class="formulario-contacto">
        <div class="row">
            <div class="col">
                <div class="ask-question-input">
                    <h4>Contacta con nosotros</h4>
                    <hr>
                    <form action="./pages/contact/contactform.php" method="post">
                        <div class="row">
                            <div class="col">
                                <span class="form-description">Nombre de usuario* </span>
                                <input type="text" name="name" class="username" placeholder="Introduzca su nombre">  
                            </div>
                            <div class="email-part col">
                                <span class="form-description2">E-Mail* </span>
                                <input type="text" name="email" class="email" placeholder="Introduzca su Email">  
                            </div>
                        </div>
                        <div class="question-title3">
                            <span class="form-description3">Título de la pregunta* </span>
                            <input type="text" name="questiontitle" class="question-title" placeholder="Escriba el título de su pregunta">
                        </div>
                        <div class="question-title3">
                            <span class="form-description4">Detalles* </span>
                            <textarea class="question-details" name="questiondetails" placeholder="Escriba la descripción detallada."></textarea>
                        </div>
                        <div class="publish-button">
                            <button type="submit" name="submit" class="publis">Enviar</button>
                        </div>                     
                    </form>  
                </div>
            </div>
        </div>
    </section>

</div> <!-- content -->