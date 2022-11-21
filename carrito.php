<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Css/style.css">
    <script src="script.js"></script>
    <title>Carrito</title>
</head>

<body>
    <?php
    $total = 0;
    $tr = 1;
    $cod = 0;
    include 'encabezado.php';
    if (isset($_SESSION['usuario'])) {

        if (isset($_POST["comprar"])) {
            include 'Conexion.php';
            $cod = $_POST["cod"];
            $sql2 = "SELECT * FROM productos WHERE codProducto= $cod";
            $resultado = mysqli_query($conn, $sql2);
            $data = mysqli_fetch_assoc($resultado);
            $codProducto = $data["codProducto"];
            $nombreProducto = $data["nombreProducto"];
            $precio = $data["precio"];
            $cantidad = $_POST["cantidad"];
            $precioTotal = $precio * $cantidad;
            $talle = $_POST["talles"];
            $color = $_POST["color"];
            $nombreDeUsuario = $_SESSION['usuario'];
            $idventaproducto= $data['idVentasProductos'] ;

            include 'Conexion.php';
            $sql = "INSERT INTO ventasproductos (codProducto, nombreProducto, talle, cantidad, color, precioTotal, nombreDeUsuario)
        VALUES ('$codProducto', '$nombreProducto', '$talle', '$cantidad', '$color', '$precioTotal', '$nombreDeUsuario')";
            $result = mysqli_query($conn, $sql);
        }
    } else {
        header("Location: login.php");
        exit();
    } ?>
    <h1>Carrito</h1>
    <center>
        <table id="tablaCarrito">
            <form action="carrito.php" method="post">
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
                <?php
                include 'Conexion.php';
                $nombreDeUsuario = $_SESSION['usuario'];
                $sql = "SELECT * FROM ventasproductos WHERE nombreDeUsuario='$nombreDeUsuario' ";
                $res = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($res)) {
                ?>
                    <tr>

                        <td><?php echo $mostrar['nombreProducto'] ?></td>
                        <td><?php echo $mostrar['cantidad'] ?></td>
                        <td><?php echo '$' . $mostrar['precioTotal'] ?></td>
                        <input type="text" name="text" id="" value="<?php echo $mostrar['idVentasProductos']?>">
                        <td class="eliminar"><input type="submit" name="eliminar" class="eliminari" value="<?php echo $mostrar['idVentasProductos']?>"></td>
                        <?php $total = $total + $mostrar['precioTotal'];
                        $tr++; ?>
                    </tr>
                <?php } ?>
                
                <tr>
                    <td id="total">Total:</td>
                    <td id="total"></td>
                    <td id="total"><?php echo '$' . $total ?></td>
                    <td id="total"></td>
                </tr>
            </form>

        </table>
        <br>
        <input type="button" value="Finalizar compra"><a href="cerrarcompra.php"></a></input>
        <input type="button" value="Seguir comprando"><a href="tiendaMujer.php"></a></input>
        <!-- <?php
        if (isset($_POST['eliminar'])) {
            include 'Conexion.php';
            $idventaproducto= $_POST['text'];
                $sql = "DELETE FROM ventasproductos WHERE idVentasProductos = $idventaproducto";
                $res = mysqli_query($conn, $sql);
                if ($res) {
                    echo 'eliminado';
                } else {
                    echo 'error';
                }
            }
        ?> -->
    </center>
</body>

</html>