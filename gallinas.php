<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>O Jalinheiro | Gallinas</title>
    <?php include('include/links.php'); ?>
</head>

<body>
    <?php include('include/cabecera.php'); ?>
    <main class="contenedor">
        <section class="card contenedor">
            <div class="seccion">
                <h2 class="cabecera"> GALLINAS: </h2>
                <button onclick="mostrarModal()" class="añadirGallina"><span class="material-symbols-outlined">
                        add
                    </span> Añadir Gallina</button>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Fecha de alta</th>
                        <th>Nombre de la raza</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php include_once("model/gallina_model.php");
                    $gallinas = mostrarGallinas();
                    foreach ($gallinas as $gallina) {
                    ?>

                        <tr>
                            <td><?php echo $gallina['nombre']; ?></td>
                            <td><?php echo $gallina['fecha_nacimiento']; ?></td>
                            <td><?php echo $gallina['fecha_alta']; ?></td>
                            <td><?php echo $gallina['nombre_raza']; ?></td>
                            <td><a href="model/gallina_eliminar.php?id=<?php echo $gallina['id'];
                                                                        ?>"><span id="delete" class="material-symbols-outlined">
                                        delete
                                    </span></a></td>
                            <td><a href="gallinas.php?id=<?php echo $gallina['id']; ?>&gallina=<?php echo $gallina['nombre']; ?>"><span class="material-symbols-outlined">
                                        skull
                                    </span></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </section>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $nombre = $_GET['gallina'];
        ?>

            <div id="pantalla-insertar" class="pantalla-completa">
                <div id="modal-pantalla" class="modal">
                    <div class="modal-cerrar">
                        <button id="cerrar" onclick="cerrarModal()"><span id="cruz" class="material-symbols-outlined">
                                close
                            </span></button>
                        <h3>Dar de baja a: <?php echo $nombre ?></h3>
                    </div>

                    <form action="controller/baja_insertar.php" method="post">
                        <input type="hidden" name="id_gallina" value="<?php echo $id ?>">
                        <div id="formulario">
                            <div class="fila">
                                <label for="fecha">Fecha de la muerte: </label>
                                <input class="basic-input" type="date" name="fecha" id="fecha">
                            </div>
                            <div class="fila">
                                <label for="causa">Causa de la baja: </label>
                                <select class="basic-input" name="causa" id="causa">
                                    <option value="sacrificada">Sacrificada</option>
                                    <option value="natural">Muerte natural</option>
                                </select>
                            </div>
                        </div>
                        <div class="boton-modal">
                            <input class="boton" type="submit" value="Insertar">
                            <input class="boton1" type="button" value="Cancelar" onclick="cerrarModal()">
                        </div>
                    </form>
                </div>
            </div>

        <?php } ?>
        <div id="pantalla-insertar" class="pantalla-completa oculto">
            <div id="modal-pantalla" class="modal">
                <div class="modal-cerrar">
                    <button id="cerrar" onclick="cerrarModal()"><span id="cruz" class="material-symbols-outlined">
                            close
                        </span></button>
                    <h3>Inserta una nueva gallina: </h3>
                </div>

                <form action="controller/gallina_insertar.php" method="post">
                    <div id="formulario">
                        <div class="fila">
                            <label for="nombre">Nombre de la gallina: </label>
                            <input class="basic-input" type="text" name="nombre" id="nombre">
                        </div>
                        <div class="fila">
                            <label for="fecha">Fecha de nacimiento: </label>
                            <input class="basic-input" type="date" name="fecha" id="fecha">
                        </div>
                        <div class="fila">
                            <label for="fecha_alta">Fecha de alta: </label>
                            <input class="basic-input" type="date" name="fecha_alta" id="fecha_alta" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <div class="fila">
                            <label for="nombre_raza">Nombre de la raza: </label>
                            <select class="basic-input" name="nombre_raza" id="nombre_raza">
                                <?php include_once('model/raza_model.php');
                                $razas = mostrarRaza();
                                foreach ($razas as $raza) {
                                ?>
                                    <option value="<?php echo $raza['nombre']; ?>"><?php echo $raza['nombre']; ?></option>
                                <?php
                                }
                                ?>
                                <!-- <option value="gallina_mos">Gallina de Mos</option>
                            <option value="gallina_villalba">Gallina de Villalba</option>
                            <option value="gallina_piñeira">Gallina Piñeira</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="boton-modal">
                        <input class="boton" type="submit" value="Insertar">
                        <input class="boton1" type="button" value="Cancelar" onclick="cerrarModal()">
                    </div>
                </form>

            </div>
        </div>
    </main>
    <footer>
        <p>&copy; Creada por Lexie 2025</p>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>