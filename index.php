<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>O Jalinheiro | Home</title>
    <?php include('include/links.php'); ?>
</head>

<body>
    <?php include('include/cabecera.php'); ?>
    <main class="contenedor">
        <section class="card contenedor">
            <div class="sec">
                <form class="form-produc" action="controller/produccion_insertar.php" method="post">
                    <!-- <input type="date" name="fecha" id="fecha" value="<?php echo date('Y-m-d'); ?>"> -->
                </form>
                <button onclick="mostrarModal()" class="anadirProduccion"><span class="material-symbols-outlined">
                        add
                    </span>Insertar Producción</button>
            </div>


            <div id="table-pro">
                <table>
                    <tr>
                        <th>Nombre de la gallina: </th>
                        <th>Fecha de recogida: </th>
                        <th>Cantidad: </th>
                    </tr>
                    <?php include_once('model/produccion_model.php');
                    $producciones = mostrarproduccion();
                    foreach ($producciones as $produccion) {
                    ?>

                        <tr>
                            <td><?php echo $produccion['nombre']; ?></td>
                            <td><?php echo $produccion['fecha_recogida']; ?></td>
                            <td><?php echo $produccion['cantidad']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            </div>
        </section>

        <div id="pantalla-insertar" class="pantalla-completa oculto">
            <div id="modal-pantalla-pro" class="modal">
                <form class="modal-form" action="controller/produccion_insertar.php" method="post">
                    <div class="modal-cerrar">
                        <button id="cerrar" onclick="cerrarModal()"><span id="cruz" class="material-symbols-outlined">
                                close
                            </span></button>
                        <h3> Insertar la produccion de hoy: </h3>
                    </div>
                    <div class="regitra-fecha">
                        <input type="date" name="fecha" id="fecha" value="<?php echo date('Y-m-d'); ?>">

                    </div>
                    <div id="table-modal-pro">
                        <table class="table-produccion">
                            <thead>
                                <tr>
                                    <td>Nombre de la gallina: </td>
                                    <td>Cantidad de huevos: </td>
                                </tr>
                            </thead>
                            <?php include_once('model/gallina_model.php');
                            $gallinas = mostrarGallinas();
                            foreach ($gallinas as $gallina) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $gallina['nombre']; ?></td>
                                        <td>
                                            <input type="radio" name="<?php echo $gallina['id']; ?>" id="<?php echo $gallina['nombre']; ?>0" value="0" checked>
                                            <label for="<?php echo $gallina['nombre']; ?>0">0</label>
                                            <input type="radio" name="<?php echo $gallina['id']; ?>" id="<?php echo $gallina['nombre']; ?>1" value="1">
                                            <label for="<?php echo $gallina['nombre']; ?>1">1</label>
                                            <input type="radio" name="<?php echo $gallina['id']; ?>" id="<?php echo $gallina['nombre']; ?>2" value="2">
                                            <label for="<?php echo $gallina['nombre']; ?>2">2</label>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                    <div class="boton-modal">
                        <input class="boton" type="submit" value="Insertar">
                        <input class="boton1" type="button" value="Cancelar" onclick="cerrarModal()">
                    </div>
            </div>

        </div>
        <!-- <div id="pantalla-insertar" class="pantalla-completa oculto">
            <div id="modal-pantalla-pro" class="modal">
                <div class="modal-cerrar">
                    <button id="cerrar" onclick="cerrarModal()"><span id="cruz" class="material-symbols-outlined">
                            close
                        </span></button>
                    <h3> Insertar la produccion de hoy: </h3>

                </div> -->
        <!-- <form class="modal-form" action="controller/produccion_insertar.php" method="post"> -->
        <!-- <div id="table-pro">
            <table>

                <tr>
                    <th>Nombre de la gallina: </th>
                    <th>Fecha de recogida: </th>
                    <th>Cantidad: </th>
                </tr>
                <?php include_once('model/produccion_model.php');
                $producciones = mostrarproduccion();
                foreach ($producciones as $produccion) {
                ?>

                    <tr>
                        <td><?php echo $produccion['id_gallina']; ?></td>
                        <td><?php echo $produccion['fecha_recogida']; ?></td>
                        <td><?php echo $produccion['cantidad']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div> -->
    </main>
    <footer>
        <p>&copy; Creada por Lexie 2025</p>
    </footer>
    <script src="js/produccion.js"></script>
</body>

</html>

<!-- <span class="material-symbols-outlined">
delete
</span>

<span class="material-symbols-outlined">
edit
</span>

<span class="material-symbols-outlined">
skull
</span>

<span class="material-symbols-outlined">
add
</span>

<span class="material-symbols-outlined">
remove
</span> -->