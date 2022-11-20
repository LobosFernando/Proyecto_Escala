<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>

    <meta charset="utf-8">

    <title>Preguntas frecuentes</title>

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
            <div id="loginE">
                <form id="contacto" method="POST" action="login.php">

                    <h1 class="label">¿Hay stock de todos los productos?</h1>

                        <p class="label">Todos los productos que publicamos están disponibles en stock. En caso de agotarse algún talle o color, esa característica se bloqueará y no podrás seleccionarla. 

 
                        </p> 
                        <h1 class="label">¿El precio de la Tienda Online es el mismo que en los locales?</h1>

                        <p class="label">No necesariamente. Los locales físicos y la Tienda Online tienen distintos paquetes de promociones y los precios pueden o no coincidir.
                        </p> 

                        <h1 class="label">¿Los precios tienen el IVA incluido?</h1>

                        <p class="label">Todos los precios publicados tienen el IVA incluido.
                        </p> 

                    </label>
                    <br><br>


                </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Preguntas frecuentes
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