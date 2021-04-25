import { 
    desplegableMenuOpcionesAbout, 
    borrarValorCuandoPulsasBuscador
} from './header-component.js';

//////////////////////////////////////////////////////
// para iniciar eventos
/////////////////////////////////////////////////////

function iniciarEventos(){
    document.getElementById("bs").addEventListener('click',borrarValorCuandoPulsasBuscador,false);
    document.getElementsByName("about")[0].addEventListener('mouseover',desplegableMenuOpcionesAbout,false);
    
}

window.onload = iniciarEventos;
