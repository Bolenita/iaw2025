
<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Panadería</title>
</head>
<body>
    
  <?php
  //Imprimir en pantalla los números pares del 1 al 100 y su suma acumulada, utilizando la estructura if.
  $suma = 0;
  
  for ($i = 1; $i <= 100; $i++) {
      if ($i % 2 == 0) { 
          echo "<br>";
          echo "$i " . ($suma += $i) . " ";
      }
  }
  ?>
  

</body>
</html>