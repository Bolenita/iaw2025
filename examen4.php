<!DOCTYPE html>
<html>
<head>
    <title>examen</title>
</head>
<body>
    

<?php

//Imprimir en pantalla los múltiplos de 5 entre 1 y 100. Utilizar la estructura de bucle for. Devolver el cuadrado de su suma.
$sum = 0;

for ($k = 1; $k <= 100; $k++) {
    if ($k % 5 == 0) { 
        echo "Número: $k ";
        echo "<br>";
        $sum += $k;
    }
}

$cuadradoSuma = $sum * $sum;
echo "Cuadrado de la suma: $cuadradoSuma";
?>


</body>
</html>