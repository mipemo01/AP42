<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Pares</title>
</head>
<body>

<?php
$difference = rand(1, 100);

$data = [1, 15, 39, 75, 92];

$pairs = [];

for ($i = 0; $i < count($data); $i++) {
    for ($j = $i + 1; $j < count($data); $j++) {
        if (abs($data[$i] - $data[$j]) == $difference) {
            $pairs[] = "({$data[$i]}, {$data[$j]})";
        }
    }
}

echo "<h3>Diferencia: $difference</h3>";

if (!empty($pairs)) {
    echo "<p>Los pares con una diferencia de $difference son: " . implode(", ", $pairs) . "</p>";
} else {
    echo "<p>No se encontraron pares con una diferencia de $difference.</p>";
}
?>

</body>
</html>