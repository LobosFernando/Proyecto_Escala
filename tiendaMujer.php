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
    <link rel="shortcut icon" href="Assets/Imágenes/favicon.png">
    <title>Tienda mujer</title>
</head>

<body>
<?php
error_reporting(0);
include 'Conexion.php' ?>
<div class="encabezado">
    <img src="menu.png" class="menu" id="menu" onclick="desplega()" >
    <img class="img" src="Assets/Imágenes/logo.png" alt="">
    <div class="nav">

        <a href="index.php">
            <p class="efectoSubrayado leftToRight">Inicio</p>
        </a>
        <a href="acercaDe.php">
            <p class="efectoSubrayado leftToRight">Acerca de</p>
        </a>
        <a href="contacto.php">
            <p class="efectoSubrayado leftToRight">Contacto</p>
        </a>
        <a href="carrito.php"><img src="Assets/Imágenes/carritoFinal.png" alt=""></a>

        <?php
        session_start();
        include 'Conexion.php';
        if (isset($_SESSION['usuario'])) { ?>

            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btnIniciarSesion" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['usuario'] ?>
                </button>
                

            </div>
            
    </div>
    <button class="btnIniciarSesion2"> <a href="login.php"><?php echo $_SESSION['usuario'] ?></a></button>
    
<?php } else { ?>
    <button class="btnIniciarSesion"> <a href="login.php">Iniciar sesión</a></button>
<?php } ?>

</div>

</div>
    <div class="desplegable" id="desplegable">
    <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="tiendaMujer.php">Tienda Mujer</a></li>
            <li><a href="tiendaHombres.php">Tienda Hombre</a><li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>

    <div class="titulo-tienda">
        <h1>Mujer</h1>

    </div>
    <center>
        <form action="tienda_cat.php" method="POST">
            <div class="categorias">
                <?php
            $sql= "SELECT * FROM categoriasmujer";
        $r= mysqli_query($conn, $sql);
        $i=0;
        while ($i<4){
            while ($row= mysqli_fetch_array($r)){ 
                $sincortar= $row['nombreCatM'];
                $cadena = substr($sincortar, 0, -1);
                ?>
                
                <a href="Categoria.php" class="item-cat-mujer"> 
                
                <img src="Assets/Imágenes/<?php echo $sincortar?>.jpg" alt=""> 
                <input type="submit" name="catElegida" class="btnSubmit" value="<?php echo $sincortar?>">
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