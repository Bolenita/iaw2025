<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vehículo</title>
</head>
<body>
<?php
require 'conexion1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO usuarios (nombre, apellidos, dni, telefono, correo) VALUES ('$nombre', '$apellidos', '$dni', '$telefono', '$correo')";

    if (mysqli_query($conn, $sql)) {
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
</body>
</html>