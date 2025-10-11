<?php

    session_start();
    
    if(!isset($_SESSION['usuario'])) {
        $_SESSION['usuario'] = 'Visitante';

    }
    
        echo "Olá, " . $_SESSION['usuario'] . "! Voce não esta logado.<br>";
        echo '<a href="section_continua.php">clique aqui para continuar</a>';
    
    
?>