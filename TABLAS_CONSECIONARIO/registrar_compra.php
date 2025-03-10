<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vehículo</title>
</head>
<body>
<h2>Registro de Compras</h2>
    <form action="registrar_compra.php" method="POST">
        Cliente: <select name="cliente_id" required>
        </select><br>
        Vehículo: <select name="vehiculo_id" required>
        </select><br>
        Fecha de Compra: <input type="date" name="fecha_compra" required><br>
        <input type="submit" value="Registrar Compra">
    </form>
</body>
</html>