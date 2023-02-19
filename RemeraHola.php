<!DOCTYPE html>
<html lang="en">
<?php
include 'Conexion.php';

$sql= "SELECT * FROM prod WHERE categoria ='RemerasM'";
$r= mysqli_query($conn, $sql);
for ($i=0; $i<1; $i++) {
    $row= mysqli_fetch_array($r);
    $cadena= $row['nombreProd'];
}
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
    $sql2 = "SELECT * FROM prod WHERE nombreProd= '$cadena'";
    $resultado = mysqli_query($conn, $sql2);
    for ($i=0; $i<1; $i++){($escribir = mysqli_fetch_array($resultado)) ?>

        <title><?php echo $escribir['nombreProd'] ?></title>
</head>

<body>
    <?php include 'encabezado.php'; ?>

    <div class="titulo-tienda">
        <h1><?php echo $escribir['nombreProd'] ?></h1>
    </div>
    <div class="remeraStars">
        <img class="imgProd" src="Assets/Imágenes/RemeraHola.jpg" alt="">
        <div class="detalle">
            <center>
                <h2 class="descripcion"><?php echo $escribir['descripcion'] ?></h2>
                <!-- carga descripcion, nombre, precio y talles desde bdd dinamicamente -->
            </center>
            <center>
                <h1>$<?php echo $escribir['precio'] ?></h1>
            </center>
        <?php
    } ?>
        <hr>
        </hr>
        <form action="carr2.php" method="post">
            <div class="talles">
                <h3 id="talles">Talles</h3>
                <center>
                    <?php
                    $sql3 = "SELECT talle FROM detalleProducto WHERE producto= '$cadena' AND cant>0"; 
                    $resultado = mysqli_query($conn, $sql3);
                    while ($escribir = mysqli_fetch_array($resultado)) { ?>
                        <label for="talles"><?php echo $escribir['talle'] ?> :</label>
                        <input type="number" name="talles[]" id="talles" min="0" max="<?php echo $escribir['cant']?>">

                    <?php
                    }
                    ?>
                </center>
            </div>
            <hr>
            <div class="colores">
                <h3 id="colores">Colores</h3>
                <center><?php
                        $sql4 = "SELECT color FROM detalleproducto WHERE producto= '$cadena'";
                        $r = mysqli_query($conn, $sql4);
                        while ($tall = mysqli_fetch_array($r)) { ?>
                        <input checked type="radio" name="color" value="<?php echo $tall['color'] ?>">
                        <canvas style="background-color: <?php echo $tall['color'] ?>;"></canvas>
                    <?php } ?>
                </center>
                <hr>
            </div>
            <div class="cantidad">
                <h3 id="cantidad">Cantidad</h3>
                <center>
                    <input id="btnCant" type="number" value="1" name="cantidad" id="cantidad">
                </center>
                <hr>
                <input type="number" name="cod" id="cod" class="cod" value="1">

            </div>
            <center>
                <div class="comprar">
                    <input class="btnComprar" type="submit" name="comprar" value="COMPRAR">
                </div>
        </form>

        </div>

    </div>
    <?php include 'footer.php'; ?>

</body>

</html>