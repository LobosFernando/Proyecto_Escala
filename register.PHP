<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>

    <meta charset="utf-8">

    <title> Formulario Registro </title>

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
                <form id="loginform" method="POST" action="register.PHP">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" name="nombre" placeholder="Nombre" required>

                    <label for="usuario">Usuario</label>
                    <input id="usuario" type="text" placeholder="Usuario" name="usuario" required>

                    <label for="correo">Correo electrónico</label>
                    <input id="correo" type="email" placeholder="Correo electónico" name="correo" required>

                    <label for="contraseña">Contraseña</label>
                    <input id="contraseña" type="password" placeholder="Contraseña" name="contraseña" required>

                    <button type="submit" title="Registrar" name="Registrar">Registrar</button>
                    <?php
    if (isset($_POST["usuario"])) {
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        include 'Conexion.php';
        $sql = "SELECT nombreDeUsuario FROM usuarios where nombredeusuario='$usuario' or correoElectronico='$correo'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) { ?>
            <h3 style="color:#D62B06">Usuario ya registrado</h3> <?php }
        else {
            $sql2= "INSERT INTO usuarios (nombreDeUsuario, nombre, correoElectronico, contraseña) VALUES 
            ('$usuario', '$nombre', '$correo', '$contraseña')";
            $ex=mysqli_query($conn, $sql2);?>
            <h3 style="color:green">Registro exitoso</h3> <?php
            
        } 
    }
    ?>
                </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Registro
                </div>
                <hr>
                <div class="pie-form">
                    <a href="login.php">Ya tengo cuenta, iniciar sesión.</a>
                    <hr>
                    <a href="index.php">« Volver</a>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>