<?php

$teste = "Cleber";
echo gettype ($teste);

$teste = 10;
echo "<br>" . gettype($teste);

$teste = TRUE;
echo "<br>" . gettype($teste);

$teste = array(1,2,3);
echo "<br>" . gettype(gettype($teste)); ?>