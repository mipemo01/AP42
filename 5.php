<!DOCTYPE html>
<html>
<head>
    <title> Repeticiones </title>
</head>
<body>
    <h1>Conteo de repetiones</h1>

    <?php
 $numeros = [3, 5, 3, 8, 5, 5, 1, 8, 3, 2, 4, 5, 6, 6];

 $repeticiones = [];
 
 foreach ($numeros as $valor) {
    if (isset($repeticiones[$valor])) {
        $repeticiones[$valor]++;
    } else {
        $repeticiones[$valor] = 1;
    }
}

foreach ($repeticiones as $valor => $conteo) {
    echo "El valor $valor aparece $conteo veces.<br>\n";
}
?>
</body>
</html>