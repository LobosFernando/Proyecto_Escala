<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">

<head>

    <meta charset="utf-8">

    <title>Envíos </title>

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

                    <h1 class="label">Costo de envío</h1>

                        <p class="label">El valor de la entrega será indicado durante tu compra, antes de que el pedido sea finalizado. Este costo corre por cuenta de nuestros clientes, excepto en los casos en que ESCALA esté llevando a cabo una acción promocional.

 
                        </p> 
                        <h1 class="label">No recibí mi pedido y ya pasó el plazo de entrega, ¿qué hago?</h1>

                        <p class="label">Por favor ponte en contacto con nosotros vía mail. No olvides tener a mano tu número de pedido para agilizar la solución.
                        </p> 

                        <h1 class="label">¿Puedo hacer el seguimiento de mi pedido?</h1>

                        <p class="label">Te enviaremos un mail con un código de seguimiento (tracking number) y las instrucciones para que puedas saber en todo momento en donde se encuentra tu pedido.
                        </p> 

                    </label>
                    <br><br>


                </form>

            </div>
            <div id="derecho">
                <div class="titulo">
                    Envíos
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