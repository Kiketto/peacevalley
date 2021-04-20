/////////////////////////////////////////////////////
// Funcion del buscador no busca ni nada XD
////////////////////////////////////////////////////

function fbuscador(){
    //Solo sirve para que el value que es "Buscador" sea = a "" nada
    var buscador = document.getElementById("bs").value
    if(buscador == "Buscador"){
        document.getElementById("bs").value = "";
    }
}


//////////////////////////////////////////////////////
// para iniciar eventos
/////////////////////////////////////////////////////

function ini(){
    document.getElementById("bs").addEventListener('click',fbuscador,false);
}

window.onload=ini;
