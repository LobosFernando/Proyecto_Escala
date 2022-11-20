<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>

    <meta charset="utf-8">

    <title> Recuperar contraseña </title>

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
            <div id="login">
                <form id="loginform" method="POST" action="recuperacion.php">

                    <label for="usuario">Ingrese su correo electrónico</label>
                    <input id="correo" type="email" name="correo" placeholder="Correo electónico" required>

                    <button type="submit" title="Enviar" name="Enviar">Enviar</button>



                </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Recuperación
                </div>
                <div class="pie-form">
                    <hr>
                    <a href="index.php">« Volver</a>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>