<?php
require 'database.php';
session_start();

if ($_POST['captcha_usuario'] != $_SESSION['captcha']) {
    $_SESSION['error'] = "Captcha incorrecto, intenta de nuevo.";
    header("Location: index.php");
    exit;
}

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['usuario'] = $email;
        header("Location: login.php");
    exit;

    } else {
        $_SESSION['error'] = "El correo electrónico o la contraseña no son correctos. Verifique bien.";
        header("Location: index.php");
        exit;
    }

    if (!$user || !password_verify($password, $user['password'])) {
        $_SESSION['error'] = "El correo electrónico o la contraseña no son correctos. Verifique bien.";
        header("Location: index.php");
        exit;
    }
?>
