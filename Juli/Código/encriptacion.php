<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

$conn = new mySqli('localhost', 'root', '', 'bdescala');
if (!$conn) {
    die("Error: ");
}
else {
    echo ("Conexión OK");
}
if (isset($_POST["submit"])) {

    $nombre = $_POST['cajaNombre'];
    $nombreDeUsuario = $_POST['cajaUser'];
    $correo = $_POST['cajaCorreo'];
    $contraseña = $_POST['cajaPass'];
    $consulta = "INSERT INTO usuarios (nombreDeUsuario, nombre, correoElectronico, contraseña) VALUES ('$nombreDeUsuario','$nombre','$correo', '$contraseña')";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
?>
    <h3>chetoo</h3>
    <?php
    }
    else {
?>
    <h3>ups</h3>
    <?php
    }
}
else {
?>
    <h3>completaa</h3>
    <?php
}


?>
</body>

</html>