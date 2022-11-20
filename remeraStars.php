<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style\Css\style.css">
    <link rel="stylesheet" href="fontello.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <?php $cod = 1;
    include 'Conexion.php';
    $sql2 = "SELECT * FROM productos WHERE codProducto= $cod";
    $resultado = mysqli_query($conn, $sql2);
    while ($escribir = mysqli_fetch_array($resultado)) { ?>

        <title><?php echo $escribir['nombreProducto'] ?></title>
</head>

<body>
    <?php include 'encabezado.php'; ?>

    <div class="titulo-tienda">
        <h1><?php echo $escribir['nombreProducto'] ?></h1>
    </div>
    <div class="remeraStars" id="remeraStars">
        <div class="detalle">
            <center>
                <h2 class="descripcion"><?php echo $escribir['comentarios'] ?></h2>
                <!-- carga descripcion, nombre, precio y talles desde bdd dinamicamente -->
            </center>
            <center>
                <h1>$<?php echo $escribir['precio'] ?></h1>
            </center>
        <?php
    } ?>
        <hr>
        </hr>
        <form action="carrito.php" method="post">
            <div class="talles">
                <h3 id="talles">Talles</h3>
                <center>
                    <?php
                    $sql3 = "SELECT talle FROM talles"; //trae los talles de la tabla talles, los muestra en un radio 
                    //button, mientras existan
                    $resultado = mysqli_query($conn, $sql3);
                    while ($escribir = mysqli_fetch_array($resultado)) { ?>
                        <input type="radio" name="talles" id="talles" value=<?php echo $escribir['talle'] ?>>
                        <label for="talles"><?php echo $escribir['talle'] ?></label>
                    <?php
                    }
                    ?>
                </center>
            </div>
            <hr>
            <div class="colores">
                <h3 id="colores">Colores</h3>
                <center>
                    <input type="radio" name="color" value="Rosa">
                    <label for="color"><input type="image" id="color1" class="coloresImg" src="Assets/Imágenes/rosa.jpg" alt="Rosa"></label>
                    <input type="radio" name="color" value="Lila">
                    <label for="color"><input type="image" id="color2" class="coloresImg" src="Assets/Imágenes/lila.jpg" alt="Lavanda"></label>

                </center>
                <hr>
            </div>
            <div class="cantidad">
                <h3 id="cantidad">Cantidad</h3>
                <center>
                    <input id="btnCant" type="number" aria-valuemin="1" name="cantidad" id="cantidad">
                </center>
                <hr>
                <input type="number" name="cod" id="cod" class="cod" value="1">
                <!-- setea cod -->
            </div>
            <center>
                <div class="comprar">
                    <input class="btnComprar" type="submit" name="comprar" value="COMPRAR">
                </div>
        </form>
        <p onclick="muestraTabla('visible')" class="efectoSubrayado2 leftToRight2">Visualizar tabla de talles</p>
        <table id="tablaTalles">
            <tr>
                <th>Talle</th>
                <th>Largo</th>
                <th>Ancho</th>
            </tr>
            <?php
            include 'Conexion.php';
            $sql = "SELECT * FROM talles";
            $result = mysqli_query($conn, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $mostrar['talle'] ?></td>
                    <td><?php echo $mostrar['largo'] ?></td>
                    <td><?php echo $mostrar['ancho'] ?></td>

                </tr>
            <?php
            }
            ?>


        </table>
        </div>

    </div>
    <?php include 'footer.php'; ?>

</body>

</html>