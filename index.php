<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Style\Css\style.css">
    <link rel="stylesheet" href="fontello.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>Escala Indumentaria</title>
</head>

<body>
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
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" style="margin-left: 0%;" href="perfil.php">Editar perfil</a></li>
                    <?php $sql= "SELECT idRol FROM usuarios WHERE nombreDeUsuario= '$_SESSION[usuario]'" ;
                    $res=mysqli_query($conn, $sql);
                    while ($a = mysqli_fetch_array($res)){
                        if ($a['idRol']== 1){?>
                            <li><a class="dropdown-item" style="margin-left: 0%;" href="panelAdmin.php">Panel Admin</a></li><?php
                        }
                    } ?>
                    <li><a class="dropdown-item" style="margin-left: 0%;" href="logout.php">Cerrar sesión</a></li>
                    
                </ul>

            </div>
    </div>
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
    <div id="carrusel-contenido">
        <div id="carrusel-caja">
            <div class="carrusel-elemento">
                <img class="imagenes" src="Assets/Imágenes/imagen1.jpg">
            </div>
            <div class="carrusel-elemento">
                <img class="imagenes" src="Assets/Imágenes/imagen2.jpg">
            </div>
            <div class="carrusel-elemento">
                <img class="imagenes" src="Assets/Imágenes/imagen3.jpg">
            </div>
        </div>

    </div>
    <a href="https://api.whatsapp.com/send?phone=543564589550" target="_blank" class="btn-wsp"> <i class="fa fa-whatsapp icono"></i></i></a>
    <div class="accesoDirectoTienda">
        <center>
            <h1 style="color:white ;">Comprá ahora</h1>
        </center>
        <div class="tiendaMujer">

            <a href="tiendaMujer.php"><img class="imgTiendaMujer" src="Assets/Imágenes/tiendamujer.jpg" alt=""></a>
            <div class="textoEncima">Ir a la tienda de mujer</div>

        </div>
        <div class="tiendaHombre">
            <a href="tiendaHombres.php"><img class="imgTiendaHombre" src="Assets/Imágenes/tiendahombre.jpg" alt=""></a>
            <div class="textoEncimaH">Ir a la tienda de hombre</div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

</body>
<script>
    function desplega(){
        if (document.getElementById("desplegable").style.display == "none") {
            document.getElementById("desplegable").style.display = "block";
        } else {
            document.getElementById("desplegable").style.display = "none";
        }
        
        
    }
</script>

</html>