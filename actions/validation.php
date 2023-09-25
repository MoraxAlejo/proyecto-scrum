<?php
require_once "../conexiondb.php";
// variables
$correo= $_POST['correo'];
$contrasena= $_POST['contrasena'];

//mysql inyections 
$consulta = $mysqli->query("SELECT * FROM `usuarios` WHERE correo = '$correo'");
$resultado = $consulta->fetch_assoc();



if ($resultado['contrasena'] == $contrasena) {
    session_start();
    $_SESSION['correo'] = $resultado['correo'];
    $_SESSION['contrasena'] = $resultado['contrasena'];
    $_SESSION['nombre'] = $resultado['nombre'];

    header("Location: /dashboard.php");
} else if ($resultado['contrasena'] <> $contrasena) {
    echo "Usuario o contraseña errados";
    die();
} 
else {
    echo "mi llave su usuario no esta registrado";
}

?>