<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $line = $email . "|" . $pass . "\n";
    file_put_contents("users.txt", $line, FILE_APPEND);

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>

<h2>Registrar Usuario</h2>

<form method="POST" action="">
    <label>Correo:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Registrar</button>
</form>

<p>¿Ya tienes cuenta? <a href="index.php">Iniciar Sesión</a></p>

</body>
</html>
