<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>

    <meta charset="utf-8">

    <title> Formulario Login </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Assets/Imágenes/favicon.png">
    <meta name="author" content="Videojuegos & Desarrollo">
    <meta name="description" content="Ejemplo de formulario de acceso basado en HTML5 y CSS">
    <meta name="keywords" content="login,formulariode acceso html">

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <!-- Link hacia el archivo de estilos css -->
    <link rel="stylesheet" href="login.css">

    <style type="text/css">

    </style>

    <script type="text/javascript">

    </script>

</head>

<body>
    <div class="encabezado">
        <center> <img class="img" src="Assets/Imágenes/logo.png" alt=""></center>
    </div>
    <div id="contenedor">

        <div id="contenedorcentrado">
            <div id="login">
                <form id="loginform" method="POST" action="login.php">

                    <label for="usuario">Usuario</label>
                    <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>

                    <label for="password">Contraseña</label>
                    <input id="password" type="password" placeholder="Contraseña" name="password" required>

                    <button type="submit" title="Ingresar" name="Ingresar">Login</button>



                </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Bienvenido
                </div>
                <hr>
                <div class="pie-form">
                    <a href="recuperacion.php">¿Perdiste tu contraseña?</a>
                    <a href="register.PHP">¿No tienes Cuenta? Registrate</a>
                    <hr>
                    <a href="index.php">« Volver</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["usuario"])) {

        $usuario = $_POST['usuario'];
        $contraseña = $_POST['password'];
        include 'Conexion.php';
        $sql = "SELECT nombreDeUsuario FROM usuarios where nombredeusuario='$usuario' && contraseña='$contraseña' ";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['contraseña']   = $contraseña;
            header("Location: index.php");
            exit();
        } else echo 'error';
    }
    ?>
</body>

</html>