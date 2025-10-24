<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Exercício 6</title>
<style>
    table { border-collapse: collapse; width: 60%; }
    th, td { border: 1px solid black; padding: 8px; text-align: center; }
</style>
</head>
<body>
    <?php
        $produtos = [

            ['nome'=>'maçã', 'precoKG'=>0.5, 'quantidade'=>2],
            ['nome'=>'melancia', 'precoKG'=>1, 'quantidade'=>5],
            ['nome'=>'laranja', 'precoKG'=>0.7, 'quantidade'=>6],
            ['nome'=>'repolho', 'precoKG'=>2, 'quantidade'=>2],
            ['nome'=>'cenoura', 'precoKG'=>0.35, 'quantidade'=>4],
            ['nome'=>'batatinha', 'precoKG'=>10, 'quantidade'=>1],

        ];

        $dinheiroDisponivel = 50;
        $totalCompra = 0;
        $diferenca = $totalCompra - $dinheiroDisponivel;
        
        echo "<table>";
        echo "<tr><th>Produto</th><th>Preço/kg (R$)</th><th>Quantidade (Kg)</th><th>Total (R$)</th></tr>";

        foreach($produtos as $produto){
                $totalProduto = $produto['precoKG'] * $produto['quantidade'];
                $totalCompra += $totalProduto;
                echo "<tr><td>{$produto['nome']}</td><td>{$produto['precoKG']}</td><td>{$produto['quantidade']}</td><td>$totalProduto</td></tr>";
        }


        echo "</table>";
            if($totalCompra > $dinheiroDisponivel){
                $faltou = $totalCompra - $dinheiroDisponivel;
                echo "<p style='color:red;'>O total da compra foi R$ $totalCompra. Faltaram R$ $faltou para pagar a conta.</p>";
            }else{
                $sobrou = $dinheiroDisponivel - $totalCompra;
                echo "<p style='color:blue;'>O total da compra foi R$ $totalCompra. Joãozinho ainda pode gastar R$ $sobrou.</p>";
        }
    ?>
</body>
</html>