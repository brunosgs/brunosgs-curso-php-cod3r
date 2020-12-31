<div class="titulo">Desafio: Recursividade</div>

<!-- 
    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];

    Incluir um '>' para o tipo de profundidade que o item esta no array, exemplo:

    >1
    >2
    >>3
    >>4
    >>5
    >6
    >>7
    >>>8
    >>>9
-->

<?php
    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];

    function profundidade($arr, $nivel = ">") {
        foreach ($arr as $value) {
            if(is_array($value)) {
                profundidade($value, $nivel . $nivel[0]);
            } else {
                echo "$nivel $value<br>";
            }
        }
    }

    profundidade($array);
    echo "<br>";
    profundidade($array, "#");
?>