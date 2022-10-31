<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="Style/Css/style.css">
</head>

<body>
    <div class="encabezado">
        <center> <img class="img" src="Assets/Imágenes/logo.png" alt=""></center>
    </div>

    <div class="recuadroRegister">
        <form action="encriptacion.php" method="post" class="form">
            <center><b>
                    <p>Registro</p>
                </b></center>
            <p>Nombre: </p> <input type="text" name="cajaNombre" id="cajaNombre" class="cajas">
            <p>Nombre de usuario: </p><input type="text" name="cajaUser" id="cajaUser" class="cajas">
            <p>Correo electrónico: </p><input type="text" name="cajaCorreo" id="cajaCorreo" class="cajas">
            <p>Contraseña:</p><input type="password" name="cajaPass" id="cajaPass" class="cajas">
            <input type="submit" value="RegistrarsesS">
            <a class="tengoCuenta" href="login.html">Tengo cuenta, iniciar sesión</a>
        </form>
    </div>

</body>

</html>