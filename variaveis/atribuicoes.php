<div class="titulo">Atribuições</div>

<?php 
    $title = 'Atribuições';

    $numero = 10;
    echo '<br>' . $numero;

    $numero = $numero - 3;
    echo '<br>' . $numero;
    
    $numero = $numero + 1.5;
    echo '<br>' . $numero;

    $numero--;
    echo '<br>' . $numero;

    --$numero;
    echo '<br>' . $numero;
    
    $numero -= 5;
    echo '<br>' . $numero;

    $numero++;
    echo '<br>' . $numero;

    ++$numero;
    echo '<br>' . $numero;

    $numero += 15;
    echo '<br>' . $numero;

    $numero *= 2;
    echo '<br>' . $numero;

    $numero /= 2;
    echo '<br>' . $numero;

    $numero %= 8;
    echo '<br>' . $numero;

    $numero **= 8;
    echo '<br>' . $numero;

    $numero .= 8;
    echo '<br>' . $numero;

    $texto = 'Esse é um texto';
    echo '<br>' . $texto;
    $texto = $texto . ' teste qualquer';
    echo '<br>' . $texto;

    $texto .= ' de verdade!';
    echo '<br>' . $texto;

    // $variavelInexistente = 'valor existente';
    echo '<br>' . $variavelInexistente;
    $valor = $variavelInexistente ?? 'valor default';
    echo '<br>' . $valor;
?>