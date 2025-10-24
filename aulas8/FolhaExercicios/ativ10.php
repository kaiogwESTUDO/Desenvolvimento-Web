<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Árvore em Linhas</title>
</head>
<body>
    <pre>
<?php
$curso = [
    "bsn" => [
        "3a Fase" => [
            "desenvWeb",
            "bancoDados1",
            "engSoft1"
        ],
        "4a Fase" => [
            "Intro Web",
            "bancoDados2",
            "engSoft2"
        ]
    ]
];

function criarArvoreLinha($array, $nivel = 0) {
    foreach($array as $chave => $valor){
        if(is_array($valor)){
            echo str_repeat("-", $nivel * 2) . $chave . "\n";
            criarArvoreLinha($valor, $nivel + 1);
        } else {
            echo str_repeat("-", $nivel * 2) . $valor . "\n";
        }
    }
}

criarArvoreLinha($curso);
?>
    </pre>
</body>
</html>
