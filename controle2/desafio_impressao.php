<div class="titulo">Desafio: Impressão</div>
<!--
    - Imprima apenas os valores do array que contém indice par e resolver com for e foreach
    - Valores esperados: AAA, CCC, EEE
-->

<?php
    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF",
    ];

    echo "Laço FOR<br>";
    for($i = 0; $i < count($array); $i++) {
        if($i % 2 == 0) {
            echo "{$array[$i]}<br>";
        }
    }

    echo "<br>Laço FOREACH<br>";
    foreach ($array as $key => $value) {
       if($key % 2 == 0) {
           echo "$value<br>";
       }
    }
?>