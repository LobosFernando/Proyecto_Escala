<!DOCTYPE html>
<html lang="en">
<?php
include 'Conexion.php';
session_start();

error_reporting(0);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style\Css\style.css">
    <link rel="stylesheet" href="fontello.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <?php
    $sql2 = "SELECT * FROM prod WHERE nombreProd= '$_SESSION[prod]'";
    $resultado = mysqli_query($conn, $sql2);
    while ($escribir = mysqli_fetch_array($resultado)) {?>

        <title><?php 
         echo $escribir['nombreProd'] ?></title>
</head>

<body>
    <?php include 'encabezado.php'; ?>

    <div class="titulo-tienda">
        <h1><?php echo $_SESSION['prod'] ?></h1>
    </div>
    <div class="remeraStars">
        <img class="imgProd" src="Assets/Imágenes/<?php echo $_SESSION['prodSE']?>.jpg" alt="">
        <div class="detalle">
            <center>
                <h2 class="descripcion"><?php echo $escribir['descripcion'] ?></h2>
                
            </center>
            <center>
                <h1>$<?php $_SESSION['precio']=$escribir['precio'];
                 echo $escribir['precio'] ?></h1>
            </center>
        <?php
    } ?>
        <hr>
        </hr>
        <form action="prod_carrito.php" method="post">
            <div class="talles">
                <h3 id="talles">Talles</h3>
                <center>
                    <?php
                    $sql3 = "SELECT talle FROM detalleProducto WHERE producto= '$_SESSION[prod]' AND cant>0"; 
                    $resultado = mysqli_query($conn, $sql3);
                    $cantTalles=0;
                    while ($escribir = mysqli_fetch_array($resultado)) { ?>
                        <label for="talles"><?php echo $escribir['talle'] ?>:</label>
                        <input type="number" name="talles<?php echo $cantTalles ?>" id="talles" min="0" max="<?php echo $escribir['cant']?>">
                        
                    <?php
                    $cantTalles++;
                    } 
                
                    ?>
                    <input type="hidden" name="cantTalles" value="<?php echo $cantTalles ?>">
                    
                </center>
                
            </div>
            <hr>
            <div class="colores">
                <h3 id="colores">Colores</h3>
                <center><?php
                        $sql4 = "SELECT DISTINCT color FROM detalleproducto WHERE producto= '$_SESSION[prod]'";
                        $r = mysqli_query($conn, $sql4);
                        while ($tall = mysqli_fetch_array($r)) { ?>
                        <input checked type="radio" name="color" value="<?php echo $tall['color'] ?>">
                        <canvas style="background-color: <?php echo $tall['color'] ?>;"></canvas>
                    <?php } ?>
                </center>
                <hr>
            </div>
          
            <center>
                <div class="comprar">
                    <input class="btnComprar" type="submit" name="comprar" value="Agregar al carrito">
                </div>
        </form>

        </div>

    </div>
    <?php include 'footer.php'; ?>

</body>

</html>