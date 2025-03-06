<!-- formulario_get.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Panadería</title>
</head>
<body>
    <h2>Realiza tu pedido</h2>
    <form action="procesador.php" method="GET">
        Nombre: <input type="text" name="nombre" required><br><br>
        Producto:
        <select name="producto">
            <option value="baguettes">Baguettes</option>
            <option value="panecillos">Panecillos</option>
            <option value="pan_sandwich">Pan de Sándwich</option>
        </select><br><br>
        <input type="submit" value="Enviar Pedido">
    </form>
</body>
</html>
