<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ativ3</title>
</head>
<body>
    <?php
    function calculoArea($lado) {
        $area = $lado * $lado;
        echo "<p>A área do quadrado de $lado metros é $area metros quadrados</p>";
        }
    calculoArea(3);
?>

</body>
</html>