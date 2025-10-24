<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>retangulo</title>
</head>
<body>
    <?php
    function retanguloArea($base, $altura) {
        $area = 0.5 * $base * $altura;
            echo "<p>A área do triângulo retângulo de base $base metros e altura $altura metros é $area metros quadrados</p>";
        }
    retanguloArea(4, 7);
?>
</body>
</html>