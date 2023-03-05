<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Css/style.css">
    <link rel="shortcut icon" href="Assets/Imágenes/favicon.png">
    <script src="script.js"></script>
    <title>Carrito</title>
</head>

<body>
   
    <h1>Carrito</h1>
    <center>
        <table id="tablaCarrito">
            <form action="prod_carrito.php" method="post">
                <tr>

                    <th>Producto</th>
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
                $arrayIds= array();
                while ($mostrar = mysqli_fetch_array($res)) {
                    $arrayIds[]= $mostrar['producto'];
                ?>
                    <tr>
                    
                        <td align="center"><?php echo $mostrar['producto'] ?></td>
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
                    $_SESSION['total']= $total ?>

                    <tr>
                        <td id="total">Total:</td>
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
        
        <a class="a_carrito" href="mercado_pago.php"><input type="button" value="Finalizar compra"></a>
        <a class="a_carrito" href="index.php"><input type="button" value="Seguir comprando"></a>
        
        
    </center><?php
} else {
                    header("Location: login.php");
                    exit();
                }?>
</body>

</html>