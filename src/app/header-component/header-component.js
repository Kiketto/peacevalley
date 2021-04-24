export function desplegableMenuOpcionesAbout(){
    var opcionesAbout = new Array('contact', 'FAQ', 'developter');
    var opcionesUrl = new Array(
        'pages\contact\contact.html.php',
        'pages\faq\faq.html.php',
        'pages\developter\developter.html.php');
    
    for(var i = 0; i < opcionAbout.length; i++){
        //Crear div
        var opcionAbout = document.createElement("div");
        opcionAbout.setAttribute('top','-100%');

        aAbout = document.createElement("a");
        opcionAbout.setAttribute('href',opcionesUrl[i]);
        opcionAbout.setAttribute('name',opcionAbout[i]);
        var contenidoAbout = document.createTextNode(opcionesAbout[i]);
        
        aAbout.appendChild(contenidoAbout);
        opcionAbout.appendChild(aAbout);

        var divAbout = document.getElementByName("about");
        document.body.insertBefore(opcionAbout,divAbout);
    
    }
    
}

export function borrarValorCuandoPulsasBuscador(){
    //Solo sirve para que el value que es "Buscador" sea = a "" nada
    var buscador = document.getElementById("bs").value
    if(buscador == "Buscador"){
        document.getElementById("bs").value = "";
    }
}