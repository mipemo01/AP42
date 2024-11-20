<!DOCTYPE html>
<html>
<head>
    <title>Separar Pares e Impares</title>
</head>
<body>
    <h1>Separación de Pares e Impares</h1>

    <?php
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $pares = [];
    $impares = [];

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero; 
        } else {
            $impares[] = $numero; 
        }
    }

    echo "<h2>Pares</h2>";
    echo implode(" - ", $pares);

    echo "<h2>Impares</h2>";
    echo implode(" - ", $impares);
    ?>
</body>
</html>