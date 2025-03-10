<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vehículo</title>
</head>
<body>
    <h2>Registrar Vehículo</h2>
    <form action="registrar_vehiculo.php" method="post">
        <label>Matrícula:</label>
        <input type="text" name="matricula" required>
        <br>
        <label>Modelo:</label>
        <input type="text" name="modelo" required>
        <br>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required>
        <br>
        <label>Marca:</label>
        <input type="text" name="marca" required>
        <br>
        <button type="submit">Registrar Vehículo</button>
    </form>
</body>
</html>