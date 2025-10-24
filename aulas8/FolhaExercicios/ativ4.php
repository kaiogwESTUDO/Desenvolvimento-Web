<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ativ</title>
</head>
<body>
    <?php
    function retanguloArea($ladoA, $ladoB) {
        $area = $ladoA * $ladoB;
            if ($area > 10) {
                    echo "<h1>A área do retângulo de $ladoA e $ladoB metros é $area metros quadrados</h1>";
                } else {
                    echo "<h3>A área do retângulo de $ladoA e $ladoB metros é $area metros quadrados</h3>";
            }
        }
    retanguloArea(20, 10);
?>
</body>
</html>