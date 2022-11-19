<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style\Css\style.css">
    <link rel="stylesheet" href="fontello.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>Escala Indumentaria</title>
</head>

<body>
<?php include 'encabezado.php'; ?>

    <div id="carrusel-contenido">
        <div id="carrusel-caja">
            <div class="carrusel-elemento">
                <img class="imagenes" src="Assets/Imágenes/imagen1.jpg" >
            </div>
            <div class="carrusel-elemento">   
                <img class="imagenes" src="Assets/Imágenes/imagen2.jpg">
            </div>
            <div class="carrusel-elemento">   
                <img class="imagenes" src="Assets/Imágenes/imagen3.jpg">                        
            </div>
        </div>

    </div>
    <a href="https://api.whatsapp.com/send?phone=543564589550" target="_blank" class="btn-wsp"> <i class="fa fa-whatsapp icono"></i></i></a>
    <div class="accesoDirectoTienda">
        <center>
            <h1 style="color:white ;">Comprá ahora</h1>
        </center>
        <div class="tiendaMujer">
            
            <a href="tiendaMujer.php"><img class="imgTiendaMujer" src="Assets/Imágenes/tiendamujer.jpg" alt=""></a>
            <div class="textoEncima">Ir a la tienda de mujer</div>

        </div>
        <div class="tiendaHombre">
            <a href="tiendaHombres.php"><img class="imgTiendaHombre" src="Assets/Imágenes/tiendahombre.jpg" alt=""></a>
            <div class="textoEncimaH">Ir a la tienda de hombre</div>
        </div>

    </div>
    <?php include 'footer.php'; ?>

</body>

</html>