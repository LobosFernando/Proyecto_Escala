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
    <title>Remeras Mujer</title>
</head>

<body>
    <?php include 'encabezado.php';
    include 'Conexion.php' ?>
    <div class="titulo-tienda">
        <h1>Remeras/Mujer</h1>

    </div>

    <center>

        <div class="categorias">
            <form action="remeraHola.php" method="post">
                <?php
                $sql = "SELECT * FROM prod WHERE categoria ='RemerasM'";
                $r = mysqli_query($conn, $sql);
                $i = 0;
                while ($i < 4) {
                    while ($row = mysqli_fetch_assoc($r)) {
                        $sincortar = $row['nombreProd'];
                        $cadena = substr($sincortar, 0, -1);
                        $cadena2 = str_replace(' ', '', $sincortar);
                         ?>
                        <a href="remeraHola.php" class="item-cat-mujer">
                            <h1 id="texto"> <?php echo $cadena ?> </h1>
                            <img src="Assets/Imágenes/<?php echo $sincortar ?>.jpg" alt="">
                            
                    
                        </a>
                        <input type="submit" name="productoElegido" value= "<?php echo $sincortar?>" >
                        <?php
                    }
                    $i++;?>
                    
                    <?php
                }
                ?>
                <br>
        </div>
        </form>
    </center>
    <a href="https://api.whatsapp.com/send?phone=543564589550" target="_blank" class="btn-wsp"> <i class="fa fa-whatsapp icono"></i></i></a>
    <?php include 'footer.php'; ?>
</body>

</html>