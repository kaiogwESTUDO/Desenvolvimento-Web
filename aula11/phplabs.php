<<?php

    define('arquivo', 'dados.txt');

    if(file_exists(arquivo)) {
        echo "o arquivo existe.<br>";

        $conteudo = file_get_contents(arquivo);
        echo "conteudo do arquivo:<br>";
        echo nl2br($conteudo);
    }

?>