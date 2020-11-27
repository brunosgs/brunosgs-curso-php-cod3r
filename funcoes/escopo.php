<div class="titulo">Função & Escopo</div>

<?php
    function imprimirMensagens() {
        echo "Olá! ";
        echo "Até a próxima!<br>";
    }

    imprimirMensagens();
    imprimirMensagens();

    $variavel = 1;

    function trocaValor() {
        // A $variavel possui escopo diferente da $variavel 
        // que esta externamente ao escopo da função, sendo assim são posições de memória diferentes.
        $variavel = 2;
        echo "Durante a função: $variavel<br>";
    }

    echo "<hr>Antes: $variavel<br>";
    trocaValor();
    echo "Depois: $variavel<br>";

    function trocaValorDeVerdade() {
        global $variavel;
        $variavel = 3;
        echo "Durante a função: $variavel<br>";
    }

    echo "<hr>Antes: $variavel<br>";
    trocaValorDeVerdade();
    echo "Depois: $variavel<br>";

    var_dump(trocaValorDeVerdade());
?>