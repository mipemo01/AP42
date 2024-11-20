<!DOCTYPE html>
<html>
<head>
    <title>Buscar Duplicados</title>
</head>
<body>
    <h1>Duplicados en el array</h1>

    <?php
    $numeros = [1, 2, 3, 4, 2, 5, 6, 3, 7, 8, 6];
    $duplicados = [];
    $verificados = [];

    foreach ($numeros as $numero) {
        if (isset($verificados[$numero]) == !isset($duplicados[$numero])) {
            $duplicados[$numero] = true;
        }
        $verificados[$numero] = true;
    }

    if (count($duplicados) > 0) {
        echo "Números duplicados: " . implode(", ", array_keys($duplicados));
    } else {
        echo "No se encontraron duplicados.";
    }
    ?>
</body>
</html>