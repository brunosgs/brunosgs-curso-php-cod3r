<div class="titulo">Declarando tipos</div>


<?php
    // Passa os parametros sem definir os tipos
    function somar($a, $b) {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar(3, 6) . "<br>";
    echo somar(1.9, 3.78) . "<br>";
    echo somar(1, "4"). "<br>";

    // Passa os parametros definido que tipo vai receber
    function somarTipo(int $a, int $b) {
        echo "<span>Somando tipo $a + $b = </span>";
        return $a + $b;
    }

    echo "<br>";
    echo somarTipo(3, 6) . "<br>";
    echo somarTipo(1.9, 3.78) . "<br>";
    echo somarTipo(1, "4"). "<br>";

    function somarTipo2($a, $b): int {
        echo "<span>Somando tipo2 $a + $b = </span>";
        return $a + $b;
    }

    echo "<br>";
    echo somarTipo2(3, 6) . "<br>";
    echo somarTipo2(2.6, 3.78) . "<br>";
    echo somarTipo2(1, "4"). "<br>";
?>