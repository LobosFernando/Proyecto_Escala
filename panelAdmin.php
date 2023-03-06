<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>

    <meta charset="utf-8">

    <title>Panel Administrador</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Videojuegos & Desarrollo">
    <meta name="description" content="Ejemplo de formulario de acceso basado en HTML5 y CSS">
    <meta name="keywords" content="login,formulariode acceso html">
    <link rel="shortcut icon" href="Assets/Imágenes/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

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
            <center>
            <div id="login2">
                <a href="cargarCategoria.php"><input type="button" value="Cargar Categoría"></a>
                <a href="cargarProducto.php"><input type="button" value="Cargar Producto"></a>
                <a href="ventas.php"><input type="button" value="Visualizar Ventas"></a>
                <a href="stock.php"><input type="button" value="Visualizar Stock"></a>
            </div>
            </center>
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
