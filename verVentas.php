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
    <title>Visualizar ventas</title>
</head>

<body>
<div class="encabezado">
    </div>
    <h1>Ventas</h1> 
    <center>
        <table id="tablaCarrito">
            <form action="detalle_ventas2.php" method="post">
                <tr>

                    <th >idVenta</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Usuario</th>
                    <th></th>
                </tr>
                <?php
                include 'Conexion.php';
                session_start();
                error_reporting(0);
                if (isset($_SESSION['usuario'])) { //si tiene sesion iniciada
                    $sql = "SELECT * FROM ventas";
                    $res = mysqli_query($conn, $sql);
                    while ($mostrar = mysqli_fetch_array($res)) {
                ?>
                        <tr>

                            <td align="center"><?php echo $mostrar['idVenta'] ?></td>
                            <td align="center"><?php echo $mostrar['fecha'] ?></td>
                            <td align="center"><?php echo $mostrar['total'] ?></td>
                            <td align="center"><?php echo $mostrar['usuario'] ?></td>

                            
                            <td class="ver"><abbr title="Visualizar venta"><input type="submit" name="ver" class="veri" value="<?php echo $mostrar['idVenta']?>"></abbr></td>
                           
                        </tr>
                    <?php } ?>

            </form>

        </table>
        <br>
    
        <a href="panelAdmin.php"><button type="button" class="btn btn-success">Volver</button></a>


    </center><?php
                } else {
                    header("Location: login.php");
                    exit();
                } ?>
</body>

                
                
</html>