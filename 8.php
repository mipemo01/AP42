<!DOCTYPE html>
<html>
<head>
    <title>Transponer</title>
</head>
<body>
    <h1>Transponer Array</h1>

    <?php
    $array = [
        [1, 5, 8, 5],
        [7, 3, 2, 4],
        [1, 6, 2, 4]
    ];

    echo "<h2>Array Original:</h2>";
    foreach ($array as $fila) {
        echo "[ " . implode(", ", $fila) . " ]<br>";
    }

    $transpuesto = [];
    $columnas = count($array[0]); 

    for ($i = 0; $i < $columnas; $i++) {
        $transpuesto[] = array_column($array, $i);
    }

    echo "<h2>Array Transpuesto:</h2>";
    foreach ($transpuesto as $fila) {
        echo "[ " . implode(", ", $fila) . " ]<br>";
    }
    ?>
</body>
</html>