import { desplegableMenuOpcionesAbout } from 'src\app\header-component\header-component.js';
import { borrarValorCuandoPulsasBuscador } from 'src\app\header-component\header-component.js';

//////////////////////////////////////////////////////
// para iniciar eventos
/////////////////////////////////////////////////////

function iniciarEventos(){
    document.getElementById("bs").addEventListener('click',borrarValorCuandoPulsasBuscador,false);
    document.getElementsByName("about")[0].addEventListener('focus',desplegableMenuOpcionesAbout,false);
    console.log('hoa');
}

window.onload = iniciarEventos();
