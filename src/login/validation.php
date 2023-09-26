<?php
require_once "../conexiondb.php";

// Verificar si los campos están vacíos
if (empty($_POST['correo']) || empty($_POST['contrasena'])) {
    echo "Por favor, complete todos los campos.";
    die();
}

// variables
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//mysql inyections 
$consulta = $mysqli->query("SELECT * FROM `usuarios` WHERE correo = '$correo'");
$resultado = $consulta->fetch_assoc();

if ($resultado) {
    if ($resultado['contrasena'] == $contrasena) {
        session_start();
        $_SESSION['correo'] = $resultado['correo'];
        $_SESSION['contrasena'] = $resultado['contrasena'];
        $_SESSION['nombre'] = $resultado['nombre'];
        $_SESSION['apellido'] = $resultado['apellido'];

        header("Location:  ../dashboard/dashboard.php");
        exit();
    } else {
        echo "Contraseña incorrecta.";
        die();
    }
} else {
    echo "Correo no registrado.";
    die();
}
?>
