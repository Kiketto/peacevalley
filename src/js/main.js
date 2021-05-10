//////////////////////////////////////////
// Desplegable about
//////////////////////////////////////////

var opcionesAbout = new Array('contact', 'FAQ', 'developter');

function desplegableMenuOpcionesAbout(){
    for (var i = 0; i < opcionesAbout.length; i++){
        document.getElementsByName(opcionesAbout[i])[0].style.display = "block";
    }
    document.getElementsByName("about")[0].addEventListener('mouseout',noDesplegableMenuOpcionesAbout,false);
}

function noDesplegableMenuOpcionesAbout(){
    for (var i = 0; i < opcionesAbout.length; i++){
        document.getElementsByName(opcionesAbout[i])[0].style.display = "none";
    }
}

function borrarValorCuandoPulsasBuscador(){
    //Solo sirve para que el value que es "Buscador" sea = a "" nada
    var buscador = document.getElementById("bs").value
    if(buscador == "Buscador"){
        document.getElementById("bs").value = "";
    }
}

//////////////////////////////////////////
// Desplegable Usuario
//////////////////////////////////////////

var opcionesUsuario = new Array('favMusica', 'favPaisaje', 'favEscena');
var desplegado = 1;

function desplegableMenuOpcionesUsuario(){

    if(desplegado == 1){
        for (var i = 0; i < opcionesUsuario.length; i++){
            document.getElementsByName(opcionesUsuario[i])[0].style.display = "block";
        }
        desplegado = 0;
    } else {
        for (var i = 0; i < opcionesUsuario.length; i++){
            document.getElementsByName(opcionesUsuario[i])[0].style.display = "none";
        }
        desplegado = 1;
    }
}

function desplegableMenuOpcionesAdministracion(){

    if(desplegado == 1){
        document.getElementsByName('administracionContacto')[0].style.display = "block";
        desplegado = 0;
    } else {
        document.getElementsByName('administracionContacto')[0].style.display = "none";
        desplegado = 1;
    }
}

/////////////////////////////////////////
// Alert Escenas Politicas
/////////////////////////////////////////

function alertEscenas(){
    document.getElementsByName('alertMessage')[0].style.visibility = "hidden";
    document.getElementsByName('alertMessage')[0].style.display = "none";
}

///////////////////////////////////////////
// Musica play and stop mouseover
///////////////////////////////////////////

function musicaPlay(nameMusica){
    var musica = document.getElementsByName(nameMusica)[0];
    musica.play();
}

function musicaStop(nameMusica){
    var musica = document.getElementsByName(nameMusica)[0];
    musica.pause();
}

//////////////////////////////////////////
// Peticion AJAX Favorito escena
/////////////////////////////////////////

function anyadirFavoritoEscena(numeroEscena) {

    var peticio_http = new XMLHttpRequest();

    var idUsuario = document.getElementsByName("idUsuario")[0].value;
    var idEscena = document.getElementsByName("idEscena")[numeroEscena].value;
    var url ='./pages/fav/favEscena-component.php?idEscena='+idEscena+'&idUsuario='+idUsuario;

    peticio_http.open('GET', url, true);
    peticio_http.send(null); 
}

function eliminarFavoritoEscena(numeroEscena) {

    peticio_http = new XMLHttpRequest();

    peticio_http.onreadystatechange = recargarPaginaDespuesEliminar;

    var idUsuario = document.getElementsByName("idUsuario")[0].value;
    var idEscena = document.getElementsByName("idEscena")[numeroEscena].value;
    var url ='./pages/fav/eliminarFavEscena-component.php?idescena='+idEscena+'&idusuario='+idUsuario;

    peticio_http.open('GET', url, true);
    peticio_http.send(null); 
}

//////////////////////////////////////////
// Peticion AJAX Favorito musica
/////////////////////////////////////////

function anyadirFavoritoMusica(numeroMusica) {

    var peticio_http = new XMLHttpRequest();

    var idUsuario = document.getElementsByName("idUsuario")[0].value;
    var idCancion = document.getElementsByName("idMusica")[numeroMusica].value;
    var url ='./pages/fav/favMusica-component.php?idmusica='+idCancion+'&idusuario='+idUsuario;

    peticio_http.open('GET', url, true);
    peticio_http.send(null); 
}

function eliminarFavoritoMusica(numeroMusica) {

    peticio_http = new XMLHttpRequest();

    peticio_http.onreadystatechange = recargarPaginaDespuesEliminar;

    var idUsuario = document.getElementsByName("idUsuario")[0].value;
    var idCancion = document.getElementsByName("idMusica")[numeroMusica].value;
    var url ='./pages/fav/eliminarFavMusica-component.php?idmusica='+idCancion+'&idusuario='+idUsuario;

    peticio_http.open('GET', url, true);
    peticio_http.send(null); 
}

//////////////////////////////////////////
// Peticion AJAX Favorito paisaje
/////////////////////////////////////////

function anyadirFavoritoPaisaje(numeroPaisaje) {

    var peticio_http = new XMLHttpRequest();

    var idUsuario = document.getElementsByName("idUsuario")[0].value;
    var idPaisaje = document.getElementsByName("idPaisaje")[numeroPaisaje].value;
    var url ='./pages/fav/favPaisaje-component.php?idpaisaje='+idPaisaje+'&idusuario='+idUsuario;

    peticio_http.open('GET', url, true);
    peticio_http.send(null); 
}

function eliminarFavoritoPaisaje(numeroPaisaje) {

    peticio_http = new XMLHttpRequest();

    peticio_http.onreadystatechange = recargarPaginaDespuesEliminar;

    var idUsuario = document.getElementsByName("idUsuario")[0].value;
    var idPaisaje = document.getElementsByName("idPaisaje")[numeroPaisaje].value;
    var url ='./pages/fav/eliminarFavPaisaje-component.php?idpaisaje='+idPaisaje+'&idusuario='+idUsuario;
    console.log('entra')
    peticio_http.open('GET', url, true);
    peticio_http.send(null); 
}

/////////////////////////////////////////////
// Peticion AJAX Respuesta al eliminar recargando la pagina
////////////////////////////////////////////

function recargarPaginaDespuesEliminar() {
    if(peticio_http.readyState == 4) {
        if(peticio_http.status == 200) {  
        location.reload();
        }
        else{  
            alert("error: "+peticio_http.statusText);
        }			
    }
}	

//////////////////////////////////////////////////////
// para iniciar eventos
/////////////////////////////////////////////////////

function iniciarEventos(){
    document.getElementById("bs").addEventListener('click',borrarValorCuandoPulsasBuscador,false);
    document.getElementsByName("about")[0].addEventListener('mouseover',desplegableMenuOpcionesAbout,false);
    document.getElementsByName("alertButton")[0].addEventListener('click',alertEscenas,false);
}

window.onload = iniciarEventos;
