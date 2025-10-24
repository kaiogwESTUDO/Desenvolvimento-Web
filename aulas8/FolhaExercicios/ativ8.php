<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício Paulinho - Juros Simples</title>
</head>
<body>
    <?php
        function calculoJS($valorVista, $numParcelas, $taxaInicial, $incrementoTaxa, $posicao) {
            $taxa = $taxaInicial + $incrementoTaxa * ($posicao - 1);
            $taxaDecimal = $taxa / 100;
            $jurosTotal = $valorVista * $taxaDecimal * $numParcelas;
            $valorParcela = ($valorVista + $jurosTotal) / $numParcelas;
            echo "<p>$numParcelas vezes: parcela de R$ " . number_format($valorParcela, 2, ',', '.') . " (Taxa: $taxa%)</p>";
        }

        $valorMoto = 8654.00;
        $taxaInicial = 1.5;
        $incremento = 0.5;

        calculoJS($valorMoto, 24, $taxaInicial, $incremento, 1);
        calculoJS($valorMoto, 36, $taxaInicial, $incremento, 2);
        calculoJS($valorMoto, 48, $taxaInicial, $incremento, 3);
        calculoJS($valorMoto, 60, $taxaInicial, $incremento, 4);
    ?>
</body>
</html>
