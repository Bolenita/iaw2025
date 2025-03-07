<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Panadería</title>
</head>
<body>
    
  <?php

//Imprimir en pantalla el cuadrado de los números del 1 al 50, ambos incluidos. Utilizar la estructura de bucle while. 
//Mostrar la suma total en pantalla.


$numero = 1;
$sumtotal = 0;

    while ($numero <= 50) {
    $cuadrado = $numero * $numero;
    echo "<br>";
    echo "Número: $numero - Cuadrado: $cuadrado ";
    $sumtotal += $cuadrado;
    echo "<br>";
    $numero++;
}
echo "<br>";
echo "Suma total: $sumtotal";
?>

</body>
</html>