<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
require 'conexion.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $usuario_id = $_POST['usuario_id']; 
    $libro_id = $_POST['libro_id']; 
    $fecha_prestamo = date('Y-m-d'); 

    $sql = "INSERT INTO prestamos (usuario_id, libro_id, fecha_prestamo) VALUES ('$usuario_id', '$libro_id', '$fecha_prestamo')";
    $sql_update = "UPDATE libros SET disponible = 0 WHERE id = '$libro_id'";

    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql_update)) { 
        echo "Préstamo registrado correctamente"; 
    } else { 
        echo "Error: " . mysqli_error($conn); 
    } 
} 
?>
</body>
</html>
