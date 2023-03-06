<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);

include 'Conexion.php' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style\Css\style.css">
    <link rel="stylesheet" href="fontello.css">
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="Assets/Imágenes/favicon.png">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title><?php echo $_SESSION['catCortada']; ?></title>
</head>

<body>
<?php include 'encabezado.php'; ?>
    <div class="titulo-tienda">
        <h1><?php echo $_SESSION['catCortada']; ?></h1>

    </div>

    <center>

        <div class="categorias">
            <form action="y.php" method="post">
                <?php
                $sql = "SELECT * FROM prod WHERE categoria = '$_SESSION[cat]'";
                $r = mysqli_query($conn, $sql);
                $i = 0;
                while ($i < 4) {
                    while ($row = mysqli_fetch_assoc($r)) {
                        $sincortar = $row['nombreProd'];
                        $cadena = substr($sincortar, 0, -1);
                        $cadena2 = str_replace(' ', '', $sincortar); ?>
                        <a href="Producto.php" class="item-cat-mujer">
                            <img src="Assets/Imágenes/<?php echo $cadena2 ?>.jpg" alt="">
                            <input type="submit" name="productoElegido" class="btnSubmit" value="<?php echo $sincortar ?>">
                        </a>
                        
                    <?php
                    }
                    $i++; ?>

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