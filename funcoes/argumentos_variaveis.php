<div class="titulo">Argumentos variáveis</div>

<?php
    function soma($a, $b) {
        return $a + $b;
    }

    echo soma(5, 6) . "<br>";

    function somaCompleta(...$numeros) {
        $soma = 0;

        foreach ($numeros as $value) {
            $soma += $value;
        }

        return $soma;
    }

    echo somaCompleta(1, 2, 3, 4, 5) . "<br>";

    // Utilizado os '...' para que espalhe os numeros para soma, se passar 
    // um array diretamente, sem utilizar os '...', o mesmo ira ficar dentro de outro array.
    $array = [7, 8, 9, 10];
    echo somaCompleta(...$array);

    function membros($titular, ...$dependentes) {
        echo "Titular: $titular <br>";

        if($dependentes) {
            foreach ($dependentes as $value) {
                echo "Dependente: $value <br>";
            }
        }
    }

    echo '<br>';
    membros("Bruno Gomes", "Maria", "Rafaela", "Heloise");
    echo '<br>';
    membros("João");
?>