<?php
require 'database.php';
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

$message = "";

if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = $conn->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
    $check->bindParam(':email', $email);
    $check->execute();

    if ($check->rowCount() > 0) {
        $message = "Este correo ya está registrado.";
    } else {

        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':email', $email);
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $hashed_password);

        if ($stmt->execute()) {
            $message = "Registro exitoso. Ahora inicia sesión.";
        } else {
            $message = "Error al registrar la cuenta.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <link rel="stylesheet" href="clases/styles.css">
    </head>
    <body>

        <div class="cuadro-sigup">
            <h1>Regístrate</h1>

            <p><?= $message ?></p>

            <form action="signin.php" method="post">
                <input type="text" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input class="regis-tre" type="submit" value="Registrar">
            </form>
            <a href="index.php">¿Ya tienes cuenta? Inicia sesión</a>
        </div>
    </body>
</html>
