<div class="titulo">Funções anônimas</div>

<?php
    $soma = function($a, $b) {
        return $a + $b;
    };

    echo $soma(1, 6) . "<br>";

    $multiplicacao = function($a, $b) {
        return $a * $b;
    };

    // Passando uma função como parâmetro
    function executar($a, $b, $operacao, $funcao) {
        $result = $funcao($a, $b);
        
        echo "$a $operacao $b = $result<br>";
    }

    function divisao($a, $b) {
        return $a / $b;
    }

    // Executa a função, que recebe outra função anônima, isso não impede de criar uma função
    // e passar como parametro também
    executar(2, 3, "+", $soma);
    executar(2, 3, "*", $multiplicacao);
    executar(2, 3, "/", divisao);
?>