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
    <title>Tienda hombre</title>
</head>

<body>
<?php include 'encabezado.php';
include 'Conexion.php' ?>

    <div class="titulo-tienda">
        <h1>Hombre</h1>

    </div>
    <center>
        
            <div class="categorias">
                <?php
            $sql= "SELECT * FROM categoriashombre";
        $r= mysqli_query($conn, $sql);
        $i=0;
        while ($i<4){
            while ($row= mysqli_fetch_array($r)){ 
                
                ?>
                
                <a href=" <?php echo $row['nombrecath']?>.php" class="item-cat-mujer"> 
                <h1 id="texto"> <?php echo $row['nombrecath'] ?>  </h1>
                <img src="Assets/Imágenes/<?php echo $row['nombrecath']?>.jpg" alt="">
                </a>
                <?php
            
            }
            $i++;
        }
        ?>
        <br>
        </div>
    </center>
    <a href="https://api.whatsapp.com/send?phone=543564589550" target="_blank" class="btn-wsp"> <i class="fa fa-whatsapp icono"></i></i></a>
    <?php include 'footer.php'; ?>
</body>

</html>