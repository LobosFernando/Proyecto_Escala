<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style\Css\style.css">
    <link rel="stylesheet" href="fontello.css">
    <script src="script.js"></script>
    <link rel="shortcut icon" href="Assets/Imágenes/favicon.png">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>Tienda Hombres</title>
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