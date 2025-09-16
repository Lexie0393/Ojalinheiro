<?php
// Cargamos todas las funciones que creamos previamente para poder insertar un cliente en la base de datos
include_once("../model/gallina_model.php");

// Guardamos en variables los valores que se escribieron en cada input del formulario
$nombre=$_POST['nombre'];
$fechaNacimiento=$_POST['fecha'];
$fechaAlta=$_POST['fecha_alta'];
$Raza=$_POST['nombre_raza'];

// Llamamos a la función que crea al gallinas
insertarGallinas($nombre, $fechaNacimiento, $fechaAlta, $Raza);


// Redirigimos a la página principal
header("Location: ../gallinas.php");

