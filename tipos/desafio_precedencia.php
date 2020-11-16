<div class="titulo">Desafio: Precedência</div>

<?php
    // Precedência de operadores:
    // () -> ** -> / * % -> + -
    error_reporting(~E_WARNING);
    echo '<p>1. Qual o valor será impresso?</p>';
    echo 2 + 5 * 3 + (12 /6) / (-8 + 2 ** 3); #Resposta: INF
    
    echo '<p>2. Qual expressão imprime o valor 100?</p>';
    echo 'a) ', (1 + 2) * 20 - 15, '<br>'; #Resposta: 45
    echo 'b) ', 4 * 5 ** 2, '<br>'; #Resposta: 100 
    echo 'c) ', 2 ** 3 ** 4 / 1e25, '<br>'; #Resposta: 82
    echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>'; #Resposta: 12
?>