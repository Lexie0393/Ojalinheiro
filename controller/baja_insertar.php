<?php
// Cargamos todas las funciones que creamos previamente para poder insertar un cliente en la base de datos
include_once("../model/baja_gallina.php");

// Guardamos en variables los valores que se escribieron en cada input del formulario
$id=$_POST['id_gallina'];
$fechaMuerte=$_POST['fecha'];
$causa=$_POST['causa'];

// Llamamos a la función que crea al gallinas
insertarBaja($id, $fechaMuerte, $causa);


// Redirigimos a la página principal
header("Location: ../gallinas.php");