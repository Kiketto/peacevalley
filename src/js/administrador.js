//////////////////////////////////////////
// Peticion AJAX Eliminar Consulta
/////////////////////////////////////////

function eliminarConsulta(numeroConsulta) {

    peticio_http = new XMLHttpRequest();

    peticio_http.onreadystatechange = recargarPaginaDespuesEliminar;

    var idSolicitud = document.getElementsByName("idSolicitud")[numeroConsulta].value;
    var url ='./eliminarSolicitud.php?idsolicitud='+idSolicitud;

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