<div class="titulo">Laço FOR</div>

<?php
    for ($i=1; $i <= 5; $i++) { 
        echo "$i <br>";
    }

    echo "<hr>";

    for(; $i<=10; $i++) {
        echo "$i <br>";
    }

    echo "<hr>";

    for(; $i <=15;) {
        echo "$i <br>";
        $i++;
    }

    echo "<hr>";

    $diasSemana = [
        'Domingo', 
        'Segunda', 
        'Terça', 
        'Quarta', 
        'Quinta', 
        'Sexta', 
        'Sábado'
    ];
    
    print_r($diasSemana);
    echo '<br>';

    for ($i=0; $i < count($diasSemana); $i++) { 
        echo "{$diasSemana[$i]} <br>";
    }

    echo "<hr>";

    $matriz = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    for ($i=0; $i < count($matriz); $i++) {
        for ($j=0; $j < count($matriz[$i]); $j++) {
            echo "{$matriz[$i][$j]} ";
        }
        
        echo '<br>';
    }
?>