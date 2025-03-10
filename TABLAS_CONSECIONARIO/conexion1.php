<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$server = "localhost";
$user = "root";
$password = "userUSER2";
$database = "gestion_coches";

// Conectar a la base de datos
$conn = mysqli_connect($server, $user, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

echo "Conexión exitosa";
?>


</body>
</html>