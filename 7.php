<!DOCTYPE html>
<html>
<head>
    <title> Desplazar ceros al final </title>
</head>
<body>
    <h1>Desplazar ceros</h1>

    <?php
    $array = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];

    echo "Array original: " . implode(", ", $array) . "<br>";

    $sinCeros = array_filter($array, function($value) {
        return $value !== 0;
    });

    $countCeros = count($array) - count($sinCeros);

    for ($i = 0; $i < $countCeros; $i++) {
        array_push($sinCeros, 0);
    }

    echo "Array modificado: " . implode(", ", $sinCeros);
    ?>
</body>
</html>