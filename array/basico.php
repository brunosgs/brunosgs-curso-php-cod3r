<div class="titulo">Básico sobre array</div>

<?php
    $lista = array(1, 2, 3.4, "texto");
    echo $lista . '<br>';
    echo var_dump($lista) . '<br>';
    print_r($lista);
    
    $lista[0] = 123;
    
    echo '<br>';
    print_r($lista);

    echo '<br>' . $lista[0];
    echo '<br>' . $lista[1];
    echo '<br>' . $lista[2];
    echo '<br>' . $lista[3];

    $texto = 'Esse é um texto de teste';
    echo '<br>' . $texto[0];
    echo '<br>' . $texto[3];
    echo '<br>' . $texto[11]; // Identifica o encoding e o acento é um índice do array. 
    echo '<br>' . mb_substr($texto, 10, 1); // A função passa um valor do índice, sem considerar o encoding. 
?>