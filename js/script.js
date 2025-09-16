// crear ventana modal para insertar gallina
function mostrarModal() {
    const pantalla = document.querySelector('#pantalla-insertar');
    pantalla.classList.remove('oculto');
    const inputnombre = document.querySelector('#nombre');
    inputnombre.value='';
}

function cerrarModal() {
    const pantalla = document.querySelector('#pantalla-insertar');
    pantalla.classList.add('oculto');
}