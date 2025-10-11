<?php

session_start();
echo "olá, " . $_SESSION['usuario'] . " você está logado!";
session_destroy();

?>