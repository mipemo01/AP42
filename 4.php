<!DOCTYPE html>
<html>
<head>
    <title>Separar Pares e Impares</title>
</head>
<body>
    <h1>Separación de Pares e Impares</h1>

    <?php
  
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
       
    $matriz = [
        0 => [], 
        1 => []  
    ];

    
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $matriz[0][] = $numero;
        } else {
            $matriz[1][] = $numero;
        }
    }

    echo "<h2>Pares</h2>";
    echo implode(" - ", $matriz[0]);

    echo "<h2>Impares</h2>";
    echo implode(" - ", $matriz[1]);
    ?>
</body>
</html>