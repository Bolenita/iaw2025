
<!DOCTYPE html>
<html>
<head>
</head>
<body>


<?php 
require 'conexion.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $titulo = $_POST['titulo']; 
    $autor = $_POST['autor']; 

    $sql = "INSERT INTO libros (titulo, autor, disponible) VALUES ('$titulo', '$autor', 1)"; 
    if (mysqli_query($conn, $sql)) { 
        echo "Libro registrado correctamente"; 
    } else { 
        echo "Error: " . mysqli_error($conn); 
    } 
} 
?>

</body>
</html>

