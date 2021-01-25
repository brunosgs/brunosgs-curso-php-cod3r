<?php namespace TratamentoErro; ?>
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

class TesteFloatException extends \Exception{
    public function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code = 0, $previous = null);
    }
}

namespace TratamentoErro\Divisao;

use TratamentoErro\TesteFloatException;

function intdiv($dividend, $divisor) {
    $result = $dividend / $divisor;

    if($divisor === 0) {
        throw new \DivisionByZeroError("Divisão por zero!");
    }

    if(is_float($result)) {
        throw new TesteFloatException("Número não é inteiro!");
    }

    return $result;
}

try {
    // echo intdiv(8, 2);
    // echo intdiv(8, 3);
    echo intdiv(8, 0);
    // echo \intdiv(8, 3);
} catch(\DivisionByZeroError $dbze) {
    echo "DivisionByZeroError: " . $dbze->getMessage();
} catch(TesteFloatException $tfe) {
    echo "TesteFloatException: " . $tfe->getMessage();
}

?> 