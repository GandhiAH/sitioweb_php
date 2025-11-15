<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="clases/styles.css">
</head>
    <body>
        <div class="cuadro-logout">
            <h1>Bienvenido a mi sitioweb </h1>
            <p>Has iniciado sesión correctamente.</p>  
            <a class="cuadrito" href="index.php">Cerrar sesión</a>
        </div>
    </body>
</html>
