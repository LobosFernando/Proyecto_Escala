<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Cargar producto</title>

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
<center> <a href="index.php"><img class="img" src="Assets/Imágenes/logo.png" alt=""></a></center>
    </div>
    <div id="contenedor">

        <div id="contenedorcentrado">
            <div id="login">
                <?php
                include 'Conexion.php';
                error_reporting(0);
                session_start();
                if (isset($_SESSION['usuario'])) {
                
                ?>
                <form action="sexo.php" method="post">
                    <center>
                    <select name="sexo" id=""><?php
                    $query = "SELECT * FROM sexo";
                    $res = mysqli_query($conn, $query);
                    while ($valores = mysqli_fetch_array($res)) {
                    echo '<option value="' . $valores['nombreSexo'] . '">' . $valores['nombreSexo'] . '</option>';
                }?>
                    </select>
                    <br><br><br>
                    </center>
                    <input type="submit" value="Siguiente">
                </form>
            </div>
            <div id="derecho">
                <div class="titulo">
                    Elija sexo del producto
                </div>
                <hr>
                <div class="pie-form">
                    <a href="index.php">« Volver</a>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
                    header("Location: login.php");
                    exit();
                }?>
</body>
</html>