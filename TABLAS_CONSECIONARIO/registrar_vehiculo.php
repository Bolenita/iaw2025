<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
require 'conexion1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $marca = $_POST['marca'];

    $sql = "INSERT INTO vehiculos (matricula, modelo, precio, marca) VALUES ('$matricula', '$modelo', '$precio', '$marca')";

    if (mysqli_query($conn, $sql)) {
        echo "Vehículo registrado correctamente.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

</body>
</html>