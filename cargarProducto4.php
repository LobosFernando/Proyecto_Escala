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
                session_start();
                
                ?>
                <form action="" method="post" id="form"><?php
                    if ($_SESSION['tipotalle']=='1'){ ?>
                        <label for='S' class='tipo1'>S:</label>
                        <input type='number' name='S' class='tipo1'>
                        <input type="hidden" name="tS" value="S">
                        <label for='M' class='tipo1'>M:</label>
                        <input type='number' name='M' class='tipo1'><br>
                        <input type="hidden" name="tM" value="M">
                        <label for='L' class='tipo1'>L:</label>
                        <input type='number' name='L' class='tipo1'>
                        <input type="hidden" name="tL" value="L">
                        <label for='XL' class='tipo1'>XL:</label>
                        <input type='number' name='XL' class='tipo1'><br>
                        <input type="hidden" name="tXL" value="XL">
                        <label for='XXL' class='tipo1'>XXL:</label>
                        <input type='number' name='XXL' class='tipo1'>
                        <input type="hidden" name="tXXL" value="XXL">
                        <label for='3XL' class='tipo1'>3XL:</label>
                        <input type='number' name='3XL' class='tipo1'><br>
                        <input type="hidden" name="t3XL" value="3XL">
                        <label for='4XL' class='tipo1'>4XL:</label>
                        <input type='number' name='4XL' class='tipo1'>
                        <input type="hidden" name="t4XL" value="4XL">
                        <label for='5XL' class='tipo1'>5XL:</label>
                        <input type='number' name='5XL' class='tipo1'><br> 
                        <input type="hidden" name="t5XL" value="5XL"><?php
                }
                     if ($_SESSION['tipotalle']=='3'){
                    ?>
                    <label for="36" class="tipo3">36:</label>
                     <input type="number" name="36" class="tipo3">
                     <input type="hidden" name="t36" value="36">
                     <label for="38" class="tipo3">38:</label>
                     <input type="number" name="38" class="tipo3"><br>
                     <input type="hidden" name="t38" value="38">
                     <label for="40" class="tipo3">40:</label>
                     <input type="number" name="40" class="tipo3">
                     <input type="hidden" name="t40" value="40">
                     <label for="42" class="tipo3">42:</label>
                     <input type="number" name="42" class="tipo3"><br>
                     <input type="hidden" name="t42" value="42">
                     <label for="44" class="tipo3">44:</label>
                     <input type="number" name="44" class="tipo3">
                     <input type="hidden" name="t44" value="44">
                     <label for="46" class="tipo3">46:</label>
                     <input type="number" name="46" class="tipo3"><br>
                     <input type="hidden" name="t46" value="46">
                     <label for="48" class="tipo3">48:</label>
                     <input type="number" name="48" class="tipo3">
                     <input type="hidden" name="t48" value="48">
                     <label for="50" class="tipo3">50:</label>
                     <input type="number" name="50" class="tipo3"><br>
                     <input type="hidden" name="t50" value="50">
                     <label for="52" class="tipo3">52:</label>
                     <input type="number" name="52" class="tipo3">
                     <input type="hidden" name="t52" value="52">
                     <label for="54" class="tipo3">54:</label>
                     <input type="number" name="54" class="tipo3"><br>
                     <input type="hidden" name="t54" value="54">
                     <label for="56" class="tipo3">56:</label>
                     <input type="number" name="56" class="tipo3"><br>
                     <input type="hidden" name="t56" value="56"> <?php } 
                     if ($_SESSION['tipotalle']=='4'){ ?>
                    <label for="39" class="tipo4">39:</label>
                     <input type="number" name="39" class="tipo4">
                     <input type="hidden" name="t39" value="39"> 
                     <label for="40" class="tipo4">40:</label>
                     <input type="number" name="40" class="tipo4">
                     <input type="hidden" name="t40" value="40"> <br>
                     <label for="41" class="tipo4">41:</label>
                     <input type="number" name="41" class="tipo4">
                     <input type="hidden" name="t41" value="41"> 
                     <label for="42" class="tipo4">42:</label>
                     <input type="number" name="42" class="tipo4"><br>
                     <input type="hidden" name="t42" value="42"> 
                     <label for="43" class="tipo4">43:</label>
                     <input type="number" name="43" class="tipo4">
                     <input type="hidden" name="t43" value="43"> 
                     <label for="44" class="tipo4">44:</label>
                     <input type="number" name="44" class="tipo4"><br>
                     <input type="hidden" name="t44" value="44"> 
                     <label for="45" class="tipo4">45:</label>
                     <input type="number" name="45" class="tipo4"><br>
                     <input type="hidden" name="t45" value="45"> <?php }
                    ?>
                    
                    <input type="submit" value="Guardar y agregar color" onclick="this.form.action='u2.php'">
                    <input type="submit" value="Guardar y salir" onclick="this.form.action='u.php'">
                </form>
            </div>
           
        </div>
    </div>
    
</body>
</html>