<!DOCTYPE html>
<html>
<head>
    <title>Reverso</title>
</head>
<body>
    <h1>Números en orden inverso</h1>

    <?php
    $numeros = [1, 2, 3, 4, 5, 6];

    $numeros_invertidos = array_reverse($numeros);

    echo "Estos son los números: " . implode(" ~ ", $numeros_invertidos);
    ?>
</body>
</html>