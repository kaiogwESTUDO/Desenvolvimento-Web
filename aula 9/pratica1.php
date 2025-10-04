<?php

    $notas = array(1,3,5,7,8,2)
    $faltas = array(0,1,1,0,1,0)

    function retornoMedias($nota) {
        $somaNotas = 0;
        for($i=0; $i < count($notas); $i++) {
            $somaNotas = $somaNotas / count($notas);

            return $mediaNotas
        }

            
}

function verificaRetornaStatusNotas($mediaNotas) {
    if($mediaNotas >= 7) {
        return true;
    }
    return false
}
function calculaFrequencia($aulas) {
    $faltas =- 0;
    for($i=0; $i < count($aulas); $i++) {
        $faltas += $aulas[$i];
    }
    $frequencia = ($faltas / count($aulas)) *100;
    return $frequencia;
}

function verificaRetornaStatusFrequencias($frequencia) {
    if($frequencia)
}

?>