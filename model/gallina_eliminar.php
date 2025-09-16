<?php
// Cargamos todas las funciones que creamos previamente para poder insertar un cliente en la base de datos
include_once("gallina_model.php");

// Guardamos en variables los valores que se escribieron en cada input del formulario
$id=$_GET['id'];

// Llamamos a la función que crea al cliente
eliminarGallina($id);



// Redirigimos a la página principal
header("Location: ../gallinas.php");