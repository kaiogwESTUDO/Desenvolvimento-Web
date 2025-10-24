<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício Juquinha - Juros Compostos</title>
</head>
<body>
    <?php
        function calculoJS($valorVista, $numParcelas, $taxaInicial, $incrementoTaxa, $posicao) {
            $taxa = $taxaInicial + $incrementoTaxa * ($posicao - 1);
            $taxaDecimal = $taxa / 100;
            $montante = $valorVista * pow(1 + $taxaDecimal, $numParcelas);
            $valorParcela = $montante / $numParcelas;
            echo "<p>$numParcelas vezes: parcela de R$ " . number_format($valorParcela, 2, ',', '.') . " (Taxa: $taxa%)</p>";
        }

        $valorMoto = 8654.00;
        $taxaInicial = 2.0; // 2% para 24 parcelas
        $incremento = 0.3;  // 0,3% a mais para cada nível

        calculoJS($valorMoto, 24, $taxaInicial, $incremento, 1);
        calculoJS($valorMoto, 36, $taxaInicial, $incremento, 2);
        calculoJS($valorMoto, 48, $taxaInicial, $incremento, 3);
        calculoJS($valorMoto, 60, $taxaInicial, $incremento, 4);
    ?>
</body>
</html>
