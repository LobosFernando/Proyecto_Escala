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
    <title>Remera Justina</title>
</head>
<body>
    <?php include 'encabezado.php'; ?>
    <?php include 'Conexion.php' ;
    $sql2= "SELECT * FROM productos WHERE codProducto='2'";
    $resultado=mysqli_query($conn, $sql2);
    while ($escribir=mysqli_fetch_array($resultado)){ ?>
    <div class="titulo-tienda">
        <h1><?php echo $escribir['nombreProducto'] ?></h1>

    </div>
    <div class="remeraStars" id="remeraJustina">
    <div class="detalle">
        <center><h2 class="descripcion"><?php echo $escribir['comentarios'] ?></h2></center> 
        <center><h1>$<?php echo $escribir['precio']?></h1></center>
        <?php 
    } ?>
            <hr></hr>
        <div class="talles">
            <h3 id="talles">Talles</h3>
            <center>
            <?php 
            $sql3= "SELECT talle FROM talles";
            $resultado=mysqli_query($conn, $sql3);
            while ($escribir=mysqli_fetch_array($resultado)){ ?>
            <input type="radio" name="talles" id="talles">
            <label for="talles"><?php echo $escribir['talle']?></label>
            <?php 
            }
            ?>
            </center>
        </div>
        <hr>
        <div class="colores">
        <h3 id="colores">Colores</h3>
        <center>
            <input type="radio" name="color">
            <label for="color"><input type="image" id="color1" class="coloresImg" src="Assets/Imágenes/crudo.jpg" alt="Crudo"></label>
            
        </center>
        <hr>
        </div>
        <div class="cantidad">
        <h3 id="cantidad">Cantidad</h3>
        <center>
            <input id="btnCant" type="number" value="1" name="" id="">
        </center>
        <hr>
        </div>
        <center>
        <div class="comprar">
            <input class="btnComprar" type="submit" value="COMPRAR">
        </div>
        <p onclick="muestraTabla('visible')" class="efectoSubrayado2 leftToRight2">Visualizar tabla de talles</p>
        <table id="tablaTalles">
            <tr>
                <th>Talle</th>
                <th>Largo</th>
                <th>Ancho</th>
            </tr>
            <?php
            $conn = new mySqli('localhost', 'root', '', 'bdescala');
            $sql="SELECT * FROM talles";
            $result=mysqli_query($conn, $sql);
            while ($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['talle']?></td>
                    <td><?php echo $mostrar['largo']?></td>
                    <td><?php echo $mostrar['ancho']?></td>

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