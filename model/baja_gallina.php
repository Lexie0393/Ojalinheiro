<?php
// Función para insertar un nuevo cliente en la tabla "cliente"
function insertarBaja($id_gallina, $fechaMuerte, $causa)
{
    // 1. Abrir conexión con la base de datos
    include("../include/db_connection.php");

    // 2. Limpiar los datos para evitar inyección SQL
    // mysqli_real_escape_string() evita caracteres peligrosos en las cadenas
    $id = mysqli_real_escape_string($db, $id_gallina);
    $id = (int)$id; // Si es número, lo convertimos a int
    $fechaMuerte = mysqli_real_escape_string($db, $fechaMuerte);
    $causa = mysqli_real_escape_string($db, $causa);

    // 3. Crear la consulta SQL de inserción
    $sql = "INSERT INTO baja (id_gallina, fecha, causa)
              VALUES ('$id', '$fechaMuerte', '$causa')";

    // 4. Ejecutar la consulta
    $resultado = mysqli_query($db, $sql);

    // 5. Comprobar si la consulta fue correcta
    if (!$resultado) {
        // Mostrar el error y detener la ejecución
        exit("Error al insertar cliente: " . mysqli_error($db));
    }

    // 6. Obtener el ID de la gallina insertado (si se quisiera usar para algo)
    $nuevoId = mysqli_insert_id($db);

    // 7. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // // 8. Devolver el ID del nuevo cliente (útil si queremos usarlo después)
    // return $nuevoId;
}