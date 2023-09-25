<?php 
require_once "conexiondb.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funval Estudiante</title>
</head>
<body>
    <form action="/actions/validation.php" method="post">
    <input type="text" placeholder="user" name="correo">
    <input type="password" placeholder="password" name="contrasena">
    <input type="submit">
    </form>
</body>
</html>