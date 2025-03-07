<!DOCTYPE html>
<html>
<head>
    <title>examen</title>
</head>
<body>
    

<?php

//Crea una función PHP llamada es_par($numero) 
// que reciba un número y devuelva verdadero si es par o falso si es impar.
function par($numero) {
    return $numero % 2 == 0; 
    }

    $numero = 9;
if (par($numero)) {
    echo "$numero es un número par";
} else {
    echo "$numero es un número impar";
}
?>


</body>
</html>


<?php

