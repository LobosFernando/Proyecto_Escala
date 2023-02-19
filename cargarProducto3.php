<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Cargar producto</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <div id="login2">
                <?php
                include 'Conexion.php';
                error_reporting(0);
                
                session_start();
                
                
                ?>
                <form action="t.php" method="post" id="form">
                    <label for="nombreP">Nombre del producto:</label><br>
                    <input type="text" name="nombreP" id="" value="<?php echo $_SESSION['nombreProd']; ?>">
                    <br>
                    <label for="color">Color:</label><br>
                    <input type="color" name="color" id="">
                    <br>
                    <label for="precio">Precio:</label><br>
                    $<input type="text" name="precio" id="">
                    <br>
                    <label for="tipoTalle">Tipo de talle:</label><br>
                    <select name="tipoTalle" id="tipoTalle">
                        <?php
                        $query = "SELECT * FROM tipostalles";
                        $res = mysqli_query($conn, $query);
                        while ($valores = mysqli_fetch_array($res)) {
                        echo '<option value="' . $valores['idTipo'] . '">' . $valores['tipo'] . '</option>';
                    }?>
                    </select>
                    <br><br><br>
                    <label for="descripcion">Descripción:</label><br>
                    <input type="text" name="descripcion" id="">
                    <br>
                    <input type="submit" value="Guardar">
                </form>
            </div>
           
        </div>
    </div>
    
</body>
</html>