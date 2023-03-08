<div class="encabezado">
    <img src="menu.png" class="menu" id="menu" onclick="desplega()">
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
        include 'Conexion.php';
        session_start();
    
        if (isset($_SESSION['usuario'])) {
            $sql2 = "SELECT SUM(cantidad) FROM carrito WHERE usuario= '$_SESSION[usuario]'";
            $res2 = mysqli_query($conn, $sql2);
            while ($r = mysqli_fetch_array($res2)) {
                $cantProd = $r[0]; ?>
                <img src="Assets/Imágenes/<?php echo $cantProd ?>.PNG" class="nroCarrito" alt=""><?php
                                                                                            } ?>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btnIniciarSesion" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['usuario'] ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" style="margin-left: 0%;" href="perfil.php">Editar perfil</a></li>
                    <?php $sql = "SELECT idRol FROM usuarios WHERE nombreDeUsuario= '$_SESSION[usuario]'";
                    $res = mysqli_query($conn, $sql);
                    while ($a = mysqli_fetch_array($res)) {
                        if ($a['idRol'] == 1) { ?>
                            <li><a class="dropdown-item" style="margin-left: 0%;" href="panelAdmin.php">Panel Admin</a></li><?php
                                                                                                                        }
                                                                                                                    } ?>
                    <li><a class="dropdown-item" style="margin-left: 0%;" href="logout.php">Cerrar sesión</a></li>

                </ul>

            </div>

    </div>
    <button id="btnGroupDrop1" type="button" class="btnIniciarSesion2" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo $_SESSION['usuario'] ?>
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <li><a class="dropdown-item" style="margin-left: 0%;" href="perfil.php">Editar perfil</a></li>
        <?php $sql = "SELECT idRol FROM usuarios WHERE nombreDeUsuario= '$_SESSION[usuario]'";
            $res = mysqli_query($conn, $sql);
            while ($a = mysqli_fetch_array($res)) {
                if ($a['idRol'] == 1) { ?>
                <li><a class="dropdown-item" style="margin-left: 0%;" href="panelAdmin.php">Panel Admin</a></li><?php
                                                                                                            }
                                                                                                        } ?>
        <li><a class="dropdown-item" style="margin-left: 0%;" href="logout.php">Cerrar sesión</a></li>

    </ul>


<?php } else { ?>
    <button class="btnIniciarSesion"> <a href="login.php">Iniciar sesión</a></button>
<?php } ?>

</div>

</div>