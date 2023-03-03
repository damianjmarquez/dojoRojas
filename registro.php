<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div class="contenedor">
        <div class="imagen">
            <img src="imagenes/doyo.jpg" alt="">
        </div>
        <div class="formulario">
            <form action="guardar.php" method="post">
                <h1>Registra tus datos</h1>
                
                <h2>Usuario</h2>
                
                <input type="text" name="Usuario">
                
                <h2>tu correo</h2>
                
                <input type="email" name="correo">
                
                <h2>Contraseña</h2>
                
                <input type="password" name="contrasena">
                
                <button>Registrarse</button>
                <br>
                <button>ya estoy registrado</button>
            </form>
        </div>
    </div>
</body>
</html>