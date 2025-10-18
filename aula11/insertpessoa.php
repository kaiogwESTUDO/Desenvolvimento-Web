<?php

    $conexao = pg_connect("host=localhost port=5432 dbname=local user=postgres password=postgres");
    if ($conexao) {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["password"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
    
        $aDados = array($nome, $sobrenome, $email, $senha, $cidade, $estado);
        
        $insert = "insert into tbpessoa(PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO)
                    values($1, $2, $3, $4, $5, $6)"; 
            
        $result = pg_query_params($conexao, $insert, $aDados);
        if($result) {
            echo "Gravado com sucesso";
        } else {
            echo "Falha na gravação";
        }
    }
?>
