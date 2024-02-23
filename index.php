<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body>
<form class="form-registro" method="POST" autocomplete="off">
            <h2>Registro</h2>
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingresar Nombre">
            <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingresar Apellido">
            <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingresar telefono">
            <input class="controls" type="password" name="clave" id="clave" placeholder="Ingresar Clave">
            <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
            <input class="botons" type="submit" name="register" value="INGRESAR">
            <p><a href="#">Crear Perfil</a></p>
    </form> 

    <?php
        include("ingreso.php")
    ?>

</body>
</html>