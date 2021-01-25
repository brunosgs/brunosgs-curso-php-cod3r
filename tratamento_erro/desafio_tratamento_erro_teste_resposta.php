<div class="titulo">Desafio: Tratamento erros</div>
<!--
    Sobrescreva o método intdiv para...
    - Lançar uma exceção quando tentar dividir por zero
    - Lançar uma exceção quando o resultado não for inteiro
    - Dividir normalmente nos demais casos

    Os testes...
    - intdiv com os parametros 8 e 2 [Sucesso]   
    - intdiv com os parametros 8 e 3 [Exceção]   
    - intdiv com os parametros 8 e 0 [Exceção]   
    - intdiv "original" com os parametros 8 e 3 [Sucesso]   
-->

<?php
require_once 'desafio_tratamento_erro_resposta.php';

use function \Aritmetica\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch(\Aritmetica\NaoInteiroException $nie) {
    echo 'Resultado não é um numero inteiro<br>';
}

try {
    echo intdiv(8, 0) . '<br>';
} catch (DivisionByZeroError $dbze) {
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2);

?>