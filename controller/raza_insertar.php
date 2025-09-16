<?php
// Cargamos todas las funciones que creamos previamente para poder insertar una raza en la base de datos
include_once("../model/raza_model.php");

// Guardamos en variables los valores que se escribieron en cada input del formulario
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];

// Llamamos a la función que crea a la raza
insertarRaza($nombre, $descripcion);


// Redirigimos a la página principal
header("Location: ../raza.php");