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

var opcionesUsuario = new Array('favMusica', 'favPaisaje');
var desplegado = 1;

function desplegableMenuOpcionesUsuario(){
    console.log('pasa');
    if(desplegado == 1){
        for (var i = 0; i < opcionesUsuario.length; i++){
            document.getElementsByName(opcionesUsuario[i])[0].style.display = "block";
        }
        desplegado = 0;
        console.log(desplegado);
    } else {
        for (var i = 0; i < opcionesUsuario.length; i++){
            document.getElementsByName(opcionesUsuario[i])[0].style.display = "none";
        }
        desplegado = 1;
        console.log(desplegado);
    }
}

//////////////////////////////////////////
// Peticion AJAX Favorito musica
/////////////////////////////////////////

function anyadirFavoritoMusica(numeroMusica) {

    var peticio_http = new XMLHttpRequest();

    var idUsuario = document.getElementsByName("idUsuario")[0].value;
    console.log(idUsuario);

    var idCancion = document.getElementsByName("idMusica")[numeroMusica].value;
    console.log(idCancion);

    var url ='./src/app/fav/favMusica-component.php?idmusica='+idCancion+'&idusuario='+idUsuario;
    console.log(url);

    peticio_http.open('GET', url, true);
    peticio_http.send(null); 

}

function eliminarFavoritoMusica(numeroMusica) {

    var peticio_http = new XMLHttpRequest();

    var idUsuario = document.getElementsByName("idUsuario")[0].value;
    console.log(idUsuario);

    var idCancion = document.getElementsByName("idMusica")[numeroMusica].value;
    console.log(idCancion);

    var url ='./src/app/fav/eliminarFavMusica-component.php?idmusica='+idCancion+'&idusuario='+idUsuario;
    console.log(url);

    peticio_http.open('GET', url, true);
    peticio_http.send(null); 

}

//////////////////////////////////////////
// Peticion AJAX Favorito paisaje
/////////////////////////////////////////

function anyadirFavoritoPaisaje(numeroPaisaje) {

    var peticio_http = new XMLHttpRequest();

    var idUsuario = document.getElementsByName("idUsuario")[0].value;
    console.log(idUsuario);

    var idPaisaje = document.getElementsByName("idPaisaje")[numeroPaisaje].value;
    console.log(idPaisaje);

    var url ='./src/app/fav/favPaisaje-component.php?idpaisaje='+idPaisaje+'&idusuario='+idUsuario;
    console.log(url);

    peticio_http.open('GET', url, true);
    peticio_http.send(null); 

}

//////////////////////////////////////////////////////
// para iniciar eventos
/////////////////////////////////////////////////////

function iniciarEventos(){
    document.getElementById("bs").addEventListener('click',borrarValorCuandoPulsasBuscador,false);
    document.getElementsByName("about")[0].addEventListener('mouseover',desplegableMenuOpcionesAbout,false);
    document.getElementsByName('listfav')[0].addEventListener('click',desplegableMenuOpcionesUsuario,false);
}

window.onload = iniciarEventos;
