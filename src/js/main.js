import { 
    desplegableMenuOpcionesAbout, 
    borrarValorCuandoPulsasBuscador
} from './header-component.js';

//////////////////////////////////////////////////////
// Musica en escenas
//////////////////////////////////////////////////////

function onplaying(nombre) {
  document.getElementsByName(nombre)[0].play();
  console.log('play');
}

function onpause(nombre) {
  document.getElementsByName(nombre)[0].play();
  console.log('pausa')
}

//////////////////////////////////////////////////////
// para iniciar eventos
/////////////////////////////////////////////////////

function iniciarEventos(){
    document.getElementById("bs").addEventListener('click',borrarValorCuandoPulsasBuscador,false);
    document.getElementsByName("about")[0].addEventListener('mouseover',desplegableMenuOpcionesAbout,false);
    for (var i = 0; i < document.getElementsByName('Escena').length; i++){
        document.getElementsByName("Escena")[i].addEventListener('mouseover',onplaying('musica'+1),false);
        console.log(document.getElementsByName('Escena').length);
    }
    for (var i = 0; i < document.getElementsByName('Escena').length; i++){
        document.getElementsByName("Escena")[i].addEventListener('mouseout',onpause('musica'+1),false);
    }
}

window.onload = iniciarEventos;
