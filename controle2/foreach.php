<div class="titulo">FOREACH</div>

<?php
    $diasSemana = [
        1 => 'Domingo', 
        'Segunda', 
        'Terça', 
        'Quarta', 
        'Quinta', 
        'Sexta', 
        'Sábado'
    ];

    foreach ($diasSemana as $dia) {
        echo "$dia<br>";
    }

    echo '<hr>';

    foreach ($diasSemana as $indice => $dia) {
        echo "$indice - $dia<br>";
    }

    echo '<hr>';

    $matriz = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    foreach ($matriz as $linha) {
        foreach ($linha as $letra) {
            echo "$letra ";
        }
        
        echo "<br>";
    }

    
    echo '<hr>';

    // Nesse exemplo foi utilzado como ref: &$dobrar, o valor dentro do array e alterando dentro do for o array
    $numeros = [1, 2, 3, 4, 5];
    
    foreach ($numeros as &$dobrar) {
        $dobrar *= 2;
        echo "$dobrar <br>";
    }
?>