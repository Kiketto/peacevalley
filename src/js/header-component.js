var opcionesAbout = new Array('contact', 'FAQ', 'developter');
var opcionesUsuario = new Array('favMusica', 'favPaisaje');

//////////////////////////////////////////
// Desplegable Usuario
//////////////////////////////////////////
export var desplegado = 1;

export function desplegableMenuOpcionesUsuario(){
    
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
// Desplegable about
//////////////////////////////////////////
export function desplegableMenuOpcionesAbout(){
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

export function borrarValorCuandoPulsasBuscador(){
    //Solo sirve para que el value que es "Buscador" sea = a "" nada
    var buscador = document.getElementById("bs").value
    if(buscador == "Buscador"){
        document.getElementById("bs").value = "";
    }
}