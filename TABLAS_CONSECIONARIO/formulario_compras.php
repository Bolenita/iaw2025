<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Compra</title>
</head>
<body>
    <h2>Registrar Compra</h2>
    <form action="registrar_compra.php" method="post">
        <label>Usuario:</label>
        <select name="usuario_id" required>
            <?php
            require 'conexion1.php';
            $usuarios = mysqli_query($conn, "SELECT id, nombre FROM usuarios");
            while ($row = mysqli_fetch_assoc($usuarios)) {
                echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
            }
            ?>
        </select>
        <br>
        <label>Vehículo:</label>
        <select name="vehiculo_id" required>
            <?php
            $vehiculos = mysqli_query($conn, "SELECT id, modelo FROM vehiculos");
            while ($row = mysqli_fetch_assoc($vehiculos)) {
                echo "<option value='" . $row['id'] . "'>" . $row['modelo'] . "</option>";
            }
            ?>
        </select>
        <br>
        <button type="submit">Registrar Compra</button>
    </form>
</body>
</html>