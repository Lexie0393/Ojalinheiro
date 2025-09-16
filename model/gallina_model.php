<?php

// Función para obtener todos los registros de la tabla "gallina"
function mostrarGallinas()
{
    // 1. Abrir conexión con la base de datos
    // Este archivo debe definir la variable $db con la conexión mysqli
    include("include/db_connection.php");

    // 2. Inicializamos un array vacío donde guardaremos todas las filas
    $datos = [];

    // 3. Escribimos la consulta SQL
    $sql = " SELECT * FROM gallina;";

    // 4. Ejecutamos la consulta
    // mysqli_query devuelve un "resultado" si es SELECT o true/false si es INSERT/UPDATE/DELETE
    $result = mysqli_query($db, $sql);

    // 5. Comprobamos si hubo un error en la consulta
    if (!$result) {
        // Mostramos el error y detenemos la ejecución
        exit("Error en la consulta: " . mysqli_error($db));
    }

    // 6. Recorremos el resultado fila a fila
    // mysqli_fetch_assoc devuelve cada fila como un array asociativo: ['columna' => valor]
    // Si no hay más filas, devuelve null y el bucle termina
    while ($fila = mysqli_fetch_assoc($result)) {
        // Añadimos cada fila al array $datos
        $datos[] = $fila;
    }

    // 7. Liberar la memoria que usaba el resultado (buena práctica con SELECT)
    mysqli_free_result($result);

    // 8. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 9. Devolver el array con todos los datos
    return $datos;
}
function mostrarGallinasController()
{
    // 1. Abrir conexión con la base de datos
    // Este archivo debe definir la variable $db con la conexión mysqli
    include("../include/db_connection.php");

    // 2. Inicializamos un array vacío donde guardaremos todas las filas
    $datos = [];

    // 3. Escribimos la consulta SQL
    $sql = " SELECT * FROM gallina;";

    // 4. Ejecutamos la consulta
    // mysqli_query devuelve un "resultado" si es SELECT o true/false si es INSERT/UPDATE/DELETE
    $result = mysqli_query($db, $sql);

    // 5. Comprobamos si hubo un error en la consulta
    if (!$result) {
        // Mostramos el error y detenemos la ejecución
        exit("Error en la consulta: " . mysqli_error($db));
    }

    // 6. Recorremos el resultado fila a fila
    // mysqli_fetch_assoc devuelve cada fila como un array asociativo: ['columna' => valor]
    // Si no hay más filas, devuelve null y el bucle termina
    while ($fila = mysqli_fetch_assoc($result)) {
        // Añadimos cada fila al array $datos
        $datos[] = $fila;
    }

    // 7. Liberar la memoria que usaba el resultado (buena práctica con SELECT)
    mysqli_free_result($result);

    // 8. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 9. Devolver el array con todos los datos
    return $datos;
}

// Función para insertar un nuevo cliente en la tabla "cliente"
function insertarGallinas($nombre, $fecha_nacimiento, $fecha_alta, $nombre_raza)
{
    // 1. Abrir conexión con la base de datos
    include("../include/db_connection.php");

    // 2. Limpiar los datos para evitar inyección SQL
    // mysqli_real_escape_string() evita caracteres peligrosos en las cadenas
    $nombre    = mysqli_real_escape_string($db, $nombre);
    $fecha_nacimiento = mysqli_real_escape_string($db, $fecha_nacimiento);
    $fecha_alta = mysqli_real_escape_string($db, $fecha_alta);
    $nombre_raza  = mysqli_real_escape_string($db, $nombre_raza);

    // 3. Crear la consulta SQL de inserción
    $sql = "INSERT INTO gallina (nombre, fecha_nacimiento, fecha_alta, nombre_raza)
              VALUES ('$nombre', '$fecha_nacimiento', '$fecha_alta', '$nombre_raza')";

    // 4. Ejecutar la consulta
    $resultado = mysqli_query($db, $sql);

    // 5. Comprobar si la consulta fue correcta
    if (!$resultado) {
        // Mostrar el error y detener la ejecución
        exit("Error al insertar cliente: " . mysqli_error($db));
    }

    // 6. Obtener el ID del nuevo cliente insertado (si se quisiera usar para algo)
    $nuevoId = mysqli_insert_id($db);

    // 7. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 8. Devolver el ID del nuevo cliente (útil si queremos usarlo después)
    return $nuevoId;
}

function eliminarGallina($id){
     // 1. Abrir conexión con la base de datos
    include("../include/db_connection.php");

    // 2. Limpiar los datos para evitar inyección SQL
    // mysqli_real_escape_string() evita caracteres peligrosos en las cadenas
    $id = mysqli_real_escape_string($db, $id);
    $id = (int)$id; // Si es número, lo convertimos a int

    // 3. Crear la consulta SQL de inserción
    $sql = "DELETE FROM gallina WHERE id=$id";

    // 4. Ejecutar la consulta
    $resultado = mysqli_query($db, $sql);

    // 5. Comprobar si la consulta fue correcta
    if (!$resultado) {
        // Mostrar el error y detener la ejecución
        exit("Error al insertar cliente: " . mysqli_error($db));
    }

    // 7. Cerrar la conexión con la base de datos
    mysqli_close($db);

    // 8. Devolver el ID del nuevo cliente (útil si queremos usarlo después)
    // return $nuevoId;
}