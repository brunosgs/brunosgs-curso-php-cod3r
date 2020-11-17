<div class="titulo">Desafio: Equação</div>

<?php
    // Precedência de operadores:
    // () -> ** -> / * % -> + -
    
    $numA = (6*(3+2)) ** 2;
    $denA = 3*2;

    $numB = (1-5)*(2-7);
    $denB = 2;

    $resultA = $numA / $denA;
    $resultB = ($numB / $denB) ** 2;

    $resultFinal = ($resultA - $resultB) ** 3 / 10 ** 3;

    echo "O resulta final é " . $resultFinal;
?>