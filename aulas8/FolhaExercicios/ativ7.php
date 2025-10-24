<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parcela calculo</title>
</head>
<body>
    <?php
        function calculoDeParcela($parcelado, $meses, $precoVista) {
            $totalComParcela = $parcelado * $meses;
            $valorJuros = $totalComParcela - $precoVista;
            echo "<p>O valor gasto apenas com juros é de R$ $valorJuros</p>";
        }
    
        calculoDeParcela(489.65, 60, 22500)
    ?>
</body>
</html>