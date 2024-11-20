<!DOCTYPE html>
<html>
<head>
    <title> Notas </title>
</head>
<body>
    <h1>Maximo y Minimo</h1>

    <?php
$notas = [2, 5, 7, 4, 1, 1, 10, 9, 8, 10];

$min = min($notas);
$max = max($notas);

$posMax = array_search($max, $notas);
array_splice($notas, $posMax, 1);

echo "Sin el máximo: ";
var_dump($notas);

$posMin = array_search($min, $notas);
array_splice($notas, $posMin, 1);

echo "<br>Sin el mínimo: ";
var_dump($notas);
?>
</body>
</html>