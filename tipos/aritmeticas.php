<div class="titulo">Operações Aritméticas</div>

<?php
    echo 1 + 1, '<br>';

    var_dump(1 + 1);
    echo '<br>';

    /** Aqui já pode entrar na questão de precedências
     *  quando for utilizar mais de uma operação.
     * */ 
    echo 1 + 2.5, '<br>';
    echo 10 - 2, '<br>';
    echo 2 * 5, '<br>';
    
    /** Em outras linguagens, na operação de divisão, 
     *  pode definir como uma divisão de números inteiros, 
     *  já no php não é definido dessa forma. 
     * */
    echo 7 / 4, '<br>';

    echo intdiv(7, 4), '<br>';
    echo round(7 / 4), '<br>';

    error_reporting(~E_WARNING); #remove o warnig gerado pela divisão por 0
    echo 7 / 0, '<br>'; #Valor tende ao infinito
    echo 7 % 4, '<br>';
    
    // echo intdiv(7, 0); #Gera erro, linha foi comentada para deixar renderizar o restante da página
    echo 4 ** 2;

    // Precedência de operadores:
    // () -> ** -> / * % -> + -
    echo '<p>Precedência</p>';
    echo 2 + 3 * 4, '<br>';
    echo (2 + 3) * 4, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';
    echo ((2 + 3) * 4) ** 2;
?>