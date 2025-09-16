<?php

var_dump($_POST);

include_once("../model/produccion_model.php");
eliminarProduccion($_POST['fecha']);

include_once('../model/gallina_model.php');
$gallinas = mostrarGallinasController();
foreach ($gallinas as $gallina) {
    insertarProduccion($gallina['id'], $_POST['fecha'], $_POST[$gallina['id']]);

}

header("Location: ../index.php");