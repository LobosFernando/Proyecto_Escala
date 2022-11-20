<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>

    <meta charset="utf-8">

    <title> Formulario Login </title>

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
                <form id="contacto" method="POST" action="login.php">

                    <label >Correo electrónico:</label>
                    <label >escala@gmail.com</label>
                    <label >Teléfono:</label>
                    <label >(03564)-15206147</label>
                    <label >Instagram:</label>
                    <label >@escalaIndumentaria</label>
                    <label >Dirección:</label>
                    <label >España 27- San Francisco (Cba.)</label>


                </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Contacto
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