<!DOCTYPE html>
<html>
<head>
    <title>examen</title>
</head>
<body>
    

<?php

//Crear una calculadora que, dados dos números, realice operaciones básicas.

function sumar($a, $b){
    return $a + $b;
}
function restar($a, $b){
    return $a - $b;
}
function division($a, $b){
    return $a / $b; 
}
switch($opcion){
    case 1:
        $resultado = sumar($numero1, $numero2);
        break;
    case 2:
        $resultado = restar($numero1, $numero2);
        break;
    case 3:
        $resultado = division($numero1, $numero2);
        break;
    default:
        $resultado = "Opción no válida.";
        break;
}

echo "El resultado es: " . $resultado;
    
?>


</body>
</html>