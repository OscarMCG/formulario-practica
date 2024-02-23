<?php

include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['clave']) >= 1 
        ) {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $telefono = trim($_POST['telefono']);
            $clave = trim($_POST['clave']);
            $consulta = "INSERT INTO usuarios(nombre, apellido, telefono, clave)
                VALUES('$nombre', '$apellido', '$telefono', '$clave')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
            ?>
            <h2> TU REGISTRO SE A COMPLETADO</h2>
            <?php
            } else {
            ?>
                <h2>ERROR</h2>
            <?php
            }
        } else {
            ?>
            <h2>LLENAR TODO LOS CAMPOS</h2>
            <?php
        }
}