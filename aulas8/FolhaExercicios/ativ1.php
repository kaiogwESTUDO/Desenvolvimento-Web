<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ativ1</title>
</head>
<body>
    <?php
    function calculo($a, $b, $c) {
        $soma = $a + $b + $c;

        if ($a > 10) {
            echo "<p style='color: blue;'>Resultado: $soma</p>";
        } elseif ($b < $c) {
            echo "<p style='color: green;'>Resultado: $soma</p>";
        } elseif ($c < $a && $c < $b) {
            echo "<p style='color: red;'>Resultado: $soma</p>";
        } else {
            echo "<p>Resultado: $soma</p>";
        }
    }
    calculo(5, 3, 6);
?>

</body>
</html>