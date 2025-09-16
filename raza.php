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
                <button onclick="mostrarModal()" class="añadirRaza"><span class="material-symbols-outlined">
                        add
                    </span>Añadir Raza</button>
                <table>
                    <tr>
                        <th>Nombre de la Raza: </th>
                        <th>Descripción</th>
                    </tr>
                    <?php include_once('model/raza_model.php');
                    $razas = mostrarRaza();
                    foreach($razas as $raza) {
                    ?>

                        <tr>
                            <td><?php echo $raza['nombre'];?></td>
                            <td><?php echo $raza['descripcion'];?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </section>
        <div id="pantalla-insertar" class="pantalla-completa oculto">
            <div id="modal-pantalla" class="modal">
             <div class="modal-cerrar">
                    <button id="cerrar" onclick="cerrarModal()"><span id="cruz" class="material-symbols-outlined">
                            close
                        </span></button>
                    <h3>Inserta una nueva raza: </h3>
                </div>

                <form action="controller/raza_insertar.php" method="post">
                    <div class="fila">
                        <label for="nombre">Nombre de la raza: </label>
                        <input class="basic-input" type="text" name="nombre" id="nombre">
                    </div>
                    <div class="fila">
                        <label for="descripcion">Descripción: </label>
                        <textarea class="basic-input" name="descripcion" id="descripcion" placeholder="Describe la nueva raza..."></textarea>
                        <!-- <input class="basic-input" type="text" name="descripcion" id="descripcion" placeholder="Describe la nueva raza..."> -->
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