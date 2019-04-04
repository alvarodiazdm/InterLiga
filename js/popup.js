var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup')
    crearEquipo = document.getElementById('customRadio1');

btnAbrirPopup.addEventListener('click', function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){

    overlay.classList.remove('active');
    popup.classList.remove('active');
});

crearEquipo.addEventListener('click',function () {
   overlay.classList.add('active');
   popup.classList.add('active');
});