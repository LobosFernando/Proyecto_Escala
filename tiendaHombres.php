<!DOCTYPE html>
<html lang="en">

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
    <title>Tienda Hombres</title>
</head>

<body>
<?php include 'encabezado.php'; ?>
    <div class="desplegable" id="desplegable">
    <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="tiendaMujer.php">Tienda Mujer</a></li>
            <li><a href="tiendaHombres.php">Tienda Hombre</a><li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <script>
    function desplega(){
        if (document.getElementById("desplegable").style.display == "none") {
            document.getElementById("desplegable").style.display = "block";
        } else {
            document.getElementById("desplegable").style.display = "none";
        }
        
        
    }
</script>
<?php 
include 'Conexion.php' ?>

    <div class="titulo-tienda">
        <h1>Hombres</h1>

    </div>
    <center>
        <form action="tienda_cat.php" method="POST">
            <div class="categorias">
                <?php
            $sql= "SELECT * FROM categoriashombre";
        $r= mysqli_query($conn, $sql);
        $i=0;
        while ($i<4){
            while ($row= mysqli_fetch_array($r)){ 
                $cadena= $row['nombrecath'];
                ?>
                
                <a href="Categoria.php" class="item-cat-mujer"> 
                
                <img src="Assets/Imágenes/<?php echo $cadena?>.jpg" alt="">
                <input type="submit" name="catElegida" class="btnSubmit" value= "<?php echo $cadena?>" >
                </a>
                
                <?php
            
            }
            $i++;
            
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