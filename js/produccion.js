function mostrarModal() {
    const pantalla = document.querySelector('#pantalla-insertar');
    pantalla.classList.remove('oculto');
}

function cerrarModal() {
    const pantalla = document.querySelector('#pantalla-insertar');
    pantalla.classList.add('oculto');
}