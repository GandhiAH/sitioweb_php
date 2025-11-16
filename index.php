<?php
require 'database.php';

session_start();

$num1 = rand(1, 9);
$num2 = rand(1, 9);
$_SESSION['captcha'] = $num1 + $num2;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia seccion</title>
    <link rel="stylesheet" href="clases/styles.css">
  </head>
  <body>
    <div class="cuadro-login">
      <h1>Inicia sesión</h1>

      <form action="menssage.php" method="post">
        <input type="text" name="email" placeholder="Correo electrónico">
        <input type="password" name="password" placeholder="Contraseña">

        <div class="captcha-box">
          <div class="captcha-op">
            <?php echo $num1 . " + " . $num2 . " = ?";?>
          </div>

          <input type="text" name="captcha_usuario" placeholder="Respuesta" required>

        </div>
          <?php
            if (!empty($_SESSION['error'])) {
            echo '<p class="error-msg">'.$_SESSION['error'].'</p>';
            unset($_SESSION['error']);
            } 
          ?>

        <input type="submit" value="Ingresar">
      </form>
        <a href="signin.php">¿No tienes cuenta? Regístrate</a>      
    </div>
  </body>
<html>
