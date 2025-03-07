<!DOCTYPE html>
<html>
<head>
    <title>examen</title>
</head>
<body>
    

<?php

//Crear un array con los meses del año. Imprimirlos en orden alfabético.

$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
         "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
var_dump($meses);
echo "<br>";
sort($meses);
foreach ($meses as $mes) {
    echo $mes . "<br>";
}
?>


</body>
</html>