<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php 

$server = "localhost"; 
$user = "root"; 
$password = "userUSER2";  
$database = "biblioteca"; 

$conn = mysqli_connect($server, $user, $password, $database); 

if (!$conn) { 
    die("Error de conexión: " . mysqli_connect_error()); 
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>

</body>
</html>

