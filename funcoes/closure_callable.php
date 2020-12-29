<div class="titulo">Closure e Callable</div>

<?php
    $soma = function($a, $b) {
        return $a + $b;
    };

    function soma2($a, $b) {
        return $a + $b;
    }

    function executar($a, $b, $operacao, Callable $funcao) {
        $result = $funcao($a, $b);
        
        echo "$a $operacao $b = $result<br>";
    }

    function executar2($a, $b, $operacao, Closure $funcao) {
        $result = $funcao($a, $b);
        
        echo "$a $operacao $b = $result<br>";
    }

    echo $soma(2, 3) . "<br>";
    echo (is_callable($soma) ? "Sim" : "Não") . "<br>";

    echo (is_callable(soma2) ? "Sim" : "Não") . "<br>";

    var_dump($soma);

    echo "<br>";
    executar(2, 3, "+", $soma);
    executar(2, 3, "+", soma2);

    echo "<br>";
    executar2(100, 100, "+", $soma);
    executar2(110, 110, "+", soma2);
?>