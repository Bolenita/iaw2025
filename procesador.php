<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nombre']) && isset($_GET['producto'])) {
    echo "Pedido realizado con éxito. ¡Gracias, " . htmlspecialchars($_GET['nombre']) . "!";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre']) && isset($_POST['producto'])) {
    echo "Pedido realizado con éxito. ¡Gracias, " . htmlspecialchars($_POST['nombre']) . "!";
} else {
    echo "Error en el pedido.";
}
?>
