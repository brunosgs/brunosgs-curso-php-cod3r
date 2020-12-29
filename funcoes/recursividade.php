<div class="titulo">Recursividade</div>

<?php
    function somaUmAte($numero) {
        $soma = 0;

        for($i = 1; $i <= $numero; $i++) {
            $soma += $i;
        }

        return $soma;
    }

    echo somaUmAte(10) . "<br>";

    function somaRecursivaUmaAte($numero) {
        if($numero === 1) {
            return 1;
        }
        
        return $numero + somaRecursivaUmaAte($numero - 1);
    }

    echo somaRecursivaUmaAte(10) . "<br>";

    // Utilizando uma operação ternária
    function somaRecursivaEconomica($numero) {
        return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
    }

    echo somaRecursivaEconomica(10) . "<br>";
?>