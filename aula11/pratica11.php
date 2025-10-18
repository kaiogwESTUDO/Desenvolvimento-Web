<?php

    define('DB_HOST', "localhost");
    define('DB_PORT', '5432');
    define('DB_USER', 'postgres');
    define('DB_PASS', 'postgres');
    define('DB_NAME', 'local');

    $connectionString = "host=".DB_HOST.
                        " port=".DB_PORT.
                        " dbname=".DB_NAME.
                        " user=".DB_USER.
                        " password=".DB_PASS;

    $condb = pg_connect($connectionString);
    if(!$condb) {
        echo "Erro ao conectar ao banco de dados.";
    }   else {
        echo "Conexão bem-sucedida! <br>";
    }
        // executar uma consulta
    $result = pg_query($condb, "SELECT COUNT(*) AS QTDTABS FROM PG_TABLES");

    while($row = pg_fetch_assoc($result)) {
        echo "<br>Result: ".$row['qtdtabs'];
    }

    //inserir dados na tabela de pessoa

    $aDados = array('João', 'Silva', 'joao.silva@gmail.com','123456','Rio do Sul','SC');
    $result = pg_query_params($condb,
                                 "INSERT INTO TBPESSOA (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO)
                                      VALUES 
                                            ($1, $2, $3, $4, $5, $6)",
                                            $aDados);


?>