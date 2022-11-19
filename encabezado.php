<html>
<?php session_start(); ?>
<div class="encabezado">
        <img class="img" src="Assets/Imágenes/logo.png" alt="">
        <div class="nav">
            <a href="index.php"><p class="efectoSubrayado leftToRight">Inicio</p></a>
            <a href="acercaDe.php"><p class="efectoSubrayado leftToRight">Acerca de</p></a>
            <a href="contacto.php"><p class="efectoSubrayado leftToRight">Contacto</p></a>
            <a href=""><img src="Assets/Imágenes/carritoFinal.png" alt="" ></a>
            <?php 
            if(isset($_SESSION['usuario'])) { ?>
            <button class="btnIniciarSesion"> <a href="perfil.php"><?php echo $_SESSION['usuario']?></a></button>
            <?php } else { ?>
                <button class="btnIniciarSesion"> <a href="login.php">Iniciar sesión</a></button>
                <?php }?>
        </div>

    </div>
</html>