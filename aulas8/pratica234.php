<?php

    $SALARIO1 = 1000;
    $SALARIO2 = 2000;

    ++$SALARIO2;
    $SALARIO1 = $SALARIO1 * 1.10;

    echo "Valor Salário1: " . $SALARIO1 . " e " . "<br>";
    echo "Valor Salário2: " . $SALARIO2 . "<br>";

    if($SALARIO1 > $SALARIO2) {
        echo "O Valor da variável 1 é maior que o valor da variável 2";
        } elseif ($SALARIO1 == $SALARIO2) {
            echo "Os valores são iguais";
            } else {
                echo "O Valor da variável 1 é menor que o valor da variável 2" . "<br>";
            }

    for ($SALARIO1 = 0; $SALARIO1 < 1100; $SALARIO1++) {
        if ($SALARIO1 == 50) {
        break;
        }
    }
        if($SALARIO1 < $SALARIO2) {
            echo "O valor do salário é de " . $SALARIO1;
        }