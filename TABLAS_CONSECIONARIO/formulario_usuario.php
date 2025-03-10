<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
</head>
<body>
    <h2>Registrar Usuario</h2>
    <form action="registrar_usuario.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>
        <br>
        <label>DNI:</label>
        <input type="text" name="dni" required>
        <br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required>
        <br>
        <label>Correo:</label>
        <input type="email" name="correo" required>
        <br>
        <button type="submit">Registrar Usuario</button>
    </form>
</body>
</html>