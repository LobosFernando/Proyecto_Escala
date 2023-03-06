<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Css/style.css">
    <link rel="shortcut icon" href="Assets/Imágenes/favicon.png">
    <script src="script.js"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style/Css/style.css">
    <title>Carrito</title>
</head>

<body>
<div class="encabezado">
    </div>
    <h1>Carrito</h1> 
    <center>
        <table id="tablaCarrito">
            <form action="prod_carrito.php" method="post">
                <tr>

                    <th>Producto</th>
                    <th>Talle</th>
                    <th>Color</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    <th>Usuario</th>
                    <th></th>
                </tr>
                <?php
                include 'Conexion.php';
                session_start();
                $nombreDeUsuario = $_SESSION['usuario'];
                if (isset($_SESSION['usuario'])) { //si tiene sesion iniciada


                    $sql = "SELECT * FROM carrito WHERE usuario='$nombreDeUsuario' ";
                    $res = mysqli_query($conn, $sql);
                    $total = 0;
                    $arrayIds = array();
                    while ($mostrar = mysqli_fetch_array($res)) {
                        $arrayIds[] = $mostrar['producto'];
                ?>
                        <tr>

                            <td align="center"><?php echo $mostrar['producto'] ?></td>
                            <td align="center"><?php echo $mostrar['talle'] ?></td>
                            <td align="center"><canvas style="background-color: <?php echo $mostrar['color'] ?>;"></canvas></td>
                            <td align="center"><?php echo $mostrar['cantidad'] ?></td>
                            <td align="center"><?php echo '$' . $mostrar['precio'] ?></td>
                            <td align="center"><?php echo '$' . $mostrar['subtotal'] ?></td>
                            <td align="center"><?php echo $mostrar['usuario'] ?></td>


                            <td class="eliminar"><input type="submit" name="eliminar" class="eliminari" value="<?php echo $mostrar['idCarrito'] ?>"></td>
                            <?php $total = $total + $mostrar['subtotal'];
                            ?>
                        </tr>
                    <?php }
                    $_SESSION['total'] = $total ?>

                    <tr>
                        <td id="total">Total:</td>
                        <td id="total"></td>
                        <td id="total"></td>
                        <td id="total"></td>
                        <td id="total"></td>
                        <td align="center" id="total"><?php echo '$' . $total ?></td>
                        <td id="total"></td>
                        <td id="total"></td>
                    </tr>
            </form>

        </table>
        <br>
        <div class="checkut-btn"></div>

        <a class="a_carrito" href="index.php"><button type="button" class="btn btn-success">Seguir comprando</button></a>


    </center><?php
                } else {
                    header("Location: login.php");
                    exit();
                } ?>
</body>
<?php 
                error_reporting(0);
                require 'vendor/autoload.php';
                MercadoPago\SDK::setAccessToken('TEST-1040330731403668-112123-1b16af8758f9cd4f1490ae6b4a60be99-254635608');
                $preference = new MercadoPago\Preference();
                $item = new MercadoPago\Item();
                $item->id = 1;
                $item->title = 'Productos';
                $item->quantity = 1;
                $item->unit_price = $_SESSION['total'];
                $item->currency_id = "AR";


                $preference->items = array($item);

                $preference->back_urls = array(
                    "success" => "http://localhost:3000/ventas.php",
                    "failure" => "http://localhost:3000/fallo.php"
                );
                $preference->auto_return = "approved";
                $preference->binary_mode = true;
                $preference->save();
                ?>
<script>
    const mp = new MercadoPago('TEST-0c6020ee-af1e-424d-8b50-520a890381f3', {
        locale: 'es-AR'
    });
    mp.checkout({
        preference: {
            id: '<?php echo $preference->id; ?>'

        },
        render: {
            container: '.checkut-btn',
            label: 'Pagar con MercadoPago'
        }
    })
</script>

</html>