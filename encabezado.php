<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<?php session_start(); ?>
<div class="encabezado">
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
        <a href=""><img src="Assets/Imágenes/carritoFinal.png" alt=""></a>
        <?php
        if (isset($_SESSION['usuario'])) { ?>

            <div class="btn-group" role="group">
                <button type="button" class="btnIniciarSesion" data-bs-toggle="dropdown">
                    <p><?php echo $_SESSION['usuario'] ?>
                </button>
                <ul class="dropdown-menu" <li><a class="dropdown-item" href="perfil.php">Editar perfil</a></li>
                    <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
                </ul>
            </div>
    </div>
<?php } else { ?>
    <button class="btnIniciarSesion"> <a href="login.php">Iniciar sesión</a></button>
<?php } ?>
</div>

</div>

</html>