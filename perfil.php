<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>

    <meta charset="utf-8">

    <title> Formulario Registro </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Videojuegos & Desarrollo">
    <meta name="description" content="Ejemplo de formulario de acceso basado en HTML5 y CSS">
    <meta name="keywords" content="login,formulariode acceso html">
    <link rel="shortcut icon" href="Assets/Imágenes/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <!-- Link hacia el archivo de estilos css -->
    <link rel="stylesheet" href="login.css">

    <style type="text/css">

    </style>

    <script type="text/javascript">

    </script>

</head>
<?php session_start(); ?>

<body>
    <div class="encabezado">
        <center> <img class="img" src="Assets/Imágenes/logo.png" alt=""></center>
    </div>
    <div id="contenedor">

        <div id="contenedorcentrado">
            <div id="login">
                <?php
                include 'Conexion.php';

                $usuario = $_SESSION['usuario'];
                $sql = "SELECT nombreDeUsuario, nombre, correoElectronico, contraseña FROM usuarios where nombredeusuario='$usuario'";
                $result = mysqli_query($conn, $sql);
                while ($mostrar = mysqli_fetch_array($result)) { ?>
                    <form id="loginform" method="POST" action="perfil.PHP">
                        <label for="nombre">Editar nombre</label>
                        <input id="nombre" type="text" name="nombre" value="<?php echo $mostrar['nombre'] ?>">

                        <label for="nombreDeUsuario">Editar suario</label>
                        <input id="nombreDeUsuario" type="text" name="nombreDeUsuario" value="<?php echo $mostrar['nombreDeUsuario'] ?>">

                        <label for="correoElectronico">Editar correo electrónico</label>
                        <input id="correoElectronico" type="text" name="correoElectronico" value="<?php echo $mostrar['correoElectronico'] ?>">

                        <label for="contraseña">Editar contraseña</label>
                        <input id="contraseña" type="text" name="contraseña" value="<?php echo $mostrar['contraseña'] ?>">
                    <?php } ?>
                    <input type="submit" title="guardar" name="guardar" value="Guardar">
                    <?php
                    if (isset($_POST["guardar"])) {
                        $nombreNuevo = $_POST['nombre'];
                        $usuarioNuevo = $_POST['nombreDeUsuario'];
                        $correoNuevo = $_POST['correoElectronico'];
                        $contraseñaNueva = $_POST['contraseña'];
                        include 'Conexion.php';
                        $sql = "UPDATE usuarios SET nombreDeUsuario = '$usuarioNuevo', nombre = '$nombreNuevo',
        correoElectronico = '$correoNuevo', contraseña = '$contraseñaNueva'  WHERE nombreDeUsuario='$usuario'";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            ?><h3 style="color:green ;">Datos modificados con éxito</h3><?php 
                            $_SESSION['usuario'] = $usuarioNuevo;
                            $_SESSION['contraseña']   = $contraseñaNueva;} 
                    }
                    
                    ?>
                    </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Editar perfil
                </div>
                <hr>
                <div class="pie-form">
                    <a href="index.php">« Volver</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>