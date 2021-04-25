var opcionesAbout = new Array('contact', 'FAQ', 'developter');

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