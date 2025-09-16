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
        <section class="section">
            <div id="top">
                <h2>RANKING TOP 5:</h2>
            </div>
            <div id="table-pro">
                <table>
                    <tr>
                        <th>RANKING</th>
                        <th>NOMBRE DE LA GALLINA:</th>
                        <th>TOTAL:</th>
                    </tr>
                    <?php include_once('model/estadisticas_model.php');
                    $gallinas = mostrarRanking();
                    $contador=0;
                    $arrPosicion = ['Primera','Segunda','Tercera','Cuarta','Quinta'];
                    foreach ($gallinas as $gallina) {
                    ?>
                        <tr>
                            <td><?php echo $arrPosicion[$contador]; ?></td>
                            <td><?php echo $gallina['nombre'];?></td>
                            <td><?php echo $gallina['total'];?></td>
                        </tr>
                    <?php 
                    $contador++;           
                    }
                    ?>
                </table>

            </div>

        </section>
    </main>
    <footer>
        <p>&copy; Creada por Lexie 2025</p>
    </footer>
</body>
</html>