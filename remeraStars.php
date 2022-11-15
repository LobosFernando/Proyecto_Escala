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
    <title>Remeras Stars</title>
</head>

<body>
    <div class="encabezado">
        <img class="img" src="Assets/Imágenes/logo.png" alt="">
        <div class="nav">
            <a href="index.php"><p class="efectoSubrayado leftToRight">Inicio</p></a>
            <a href="acercaDe.php"><p class="efectoSubrayado leftToRight">Acerca de</p></a>
            <a href="contacto.php"><p class="efectoSubrayado leftToRight">Contacto</p></a>
            <a href=""><img src="Assets/Imágenes/carritoFinal.png" alt="" ></a>
            <button class="btnIniciarSesion"> <a href="login.php">Iniciar sesión</a></button>
        </div>

    </div>
    <div class="titulo-tienda">
        <h1>Remera Stars</h1>

    </div>
    <div class="remeraStars" id="remeraStars">
    <div class="detalle">
        <center><h2 class="descripcion"> Remera de jersey color rosa manga corta con cuello y puños en color lavanda y estampa 
            “MADE OF STARS” en delantero, también en color lavanda.</h2></center>
            <hr></hr>
        <div class="talles">
            <h3 id="talles">Talles</h3>
            <center>
            <input type="radio" name="talles" id="talles">
            <label for="talles">S</label>
            <input type="radio" name="talles" id="talles">
            <label for="talles">M</label>
            <input type="radio" name="talles" id="talles">
            <label for="talles">L</label>
            <input type="radio" name="talles" id="talles">
            <label for="talles">XL</label>
            <input type="radio" name="talles" id="talles">
            <label for="talles">XXL</label>
            </center>
        </div>
        <hr>
        <div class="colores">
        <h3 id="colores">Colores</h3>
        <center>
            <input type="image" class="coloresImg" src="Assets/Imágenes/rosa.jpg" alt="Rosa" onclick="selecciona">
            <input type="image" class="coloresImg" src="Assets/Imágenes/lila.jpg" alt="Lavanda" onclick="selecciona">
        </center>
        <hr>
        </div>
    </div>
        
    </div>