<div class="titulo">Comparação de arrays</div>

<?php
    $arr1 = [
        'nome' => 'Maria',
        'idade' => 20
    ];

    $arr2 = [
        'nome' => 'Maria',
        'idade' => 20
    ];

    var_dump($arr1 == $arr2);
    echo '<br>';
    var_dump($arr1 === $arr2);
    echo '<br>';

    $arr3 = [
        'idade' => 20,
        'nome' => 'Maria'
    ];

    echo '<br>';
    var_dump($arr1 == $arr3);
    echo '<br>';
    var_dump($arr1 === $arr3);
    echo '<br>';
    var_dump($arr1 != $arr3);
    echo '<br>';
    var_dump($arr1 !== $arr3);
    echo '<br><br>';
    
    $arr4 = [
        'idade' => '20',
        'nome' => 'Maria'
    ];
    
    var_dump($arr1 == $arr4);
    echo '<br>';
    var_dump($arr1 === $arr4);
?>