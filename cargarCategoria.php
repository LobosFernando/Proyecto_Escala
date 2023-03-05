<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Cargar categoría</title>

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
                session_start();
                
                if (isset($_SESSION['usuario'])) {
                ?>
                    <form id="loginform" method="POST" action="cargarCategoria.PHP">
                        <label for="nombreCat">NombreCategoria</label>
                        <input id="nombreCat" type="text" name="nombreCat" >

                        <label for="select">Género categoría:</label>
                        <select name="select">
                            <option value="0">Hombre</option>
                            <option value="1">Mujer</option>
                    <br><br><br>
                    <input type="submit" title="guardar" name="guardar" value="Guardar">
                    <?php
                    include 'Conexion.php';
                    if (isset($_POST["guardar"])) {
                        
                        $genero = $_POST['select'];
                        if ($genero=="0"){
                            $nombreC = $_POST['nombreCat'];
                            $categoria='categoriashombre';
                            $columna='Nombrecat'.'h';
                        }
                        else {
                            $nombreC = $_POST['nombreCat'].'M';
                            $categoria='categoriasmujer';
                            $columna='NombreCat'.'M';
                            
                        }
                        
                        $sql = "INSERT INTO $categoria ($columna
                        ) VALUES ('$nombreC')";
                        $sql2=  "CREATE TABLE $nombreC (
                            id INTEGER PRIMARY KEY,
                            nombre VARCHAR(30) not null,
                            descripcion VARCHAR(200) not null,
                            precio INTEGER not null,
                            stockS INTEGER not null,
                            stockM INTEGER not null,
                            stockL INTEGER not null,
                            stockXL INTEGER not null,
                            stockXXL INTEGER not null
                        );";
                        $result = mysqli_query($conn, $sql);
                        $result = mysqli_query($conn, $sql2);
                        if ($result) {
                            ?><h3 style="color:green ;">Categoría cargada con éxito.</h3><?php
                        }
                }
                    ?>
                    </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Cargar categoría
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