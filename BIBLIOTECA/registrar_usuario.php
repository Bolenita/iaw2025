<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php 
require 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nombre = trim($_POST['nombre']); 
    $email = trim($_POST['email']); 

    if (empty($nombre) || empty($email)) {
        die("Error: Todos los campos son obligatorios.");
    }

    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')"; 

    if (mysqli_query($conn, $sql)) { 
        echo "Usuario registrado correctamente.";
    } else { 
        echo "Error al registrar usuario: " . mysqli_error($conn);
    } 
} else {
    echo "Error: No se recibió una solicitud POST.";
}
?>

</body>
</html>
