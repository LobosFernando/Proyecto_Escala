<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario Registro </title>    
        
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
            <center>  <img class="img" src="Assets/Imágenes/logo.png" alt=""></center>   
        </div>
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" type="text" name="nombre" placeholder="Nombre" required>
                        
                        <label for="usuario">Usuario</label>
                        <input id="usuario" type="text" placeholder="Usuario" name="usuario" required>
                        
                        <label for="correo">Correo electrónico</label>
                        <input id="correo" type="email" placeholder="Correo electónico" name="correo" required>

                        <label for="contraseña">Contraseña</label>
                        <input id="contraseña" type="password" placeholder="Contraseña" name="contraseña" required>

                        <button type="submit" title="Registrar" name="Registrar">Registrar</button>
                    </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Registro
                    </div>
                    <hr>
                    <div class="pie-form">
                        <a href="login.php">Ya tengo cuenta, iniciar sesión.</a>
                        <hr>
                        <a href="index.php">« Volver</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>