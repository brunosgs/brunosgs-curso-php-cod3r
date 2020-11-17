<div class="titulo">Variáveis</div>

<?php
    $numeroA = 13;
    
    echo $numeroA, '<br>';
    var_dump($numeroA);
    
    $a = 3;
    $b = 16;

    $soma = $a + $b;

    // Variaveis são case sensitive
    echo '<br>', $soma;

    echo '<br>', isset($soma);

    unset($soma);
    echo '<br>', var_dump($soma);

    $variavel = 10;
    echo '<br>', $variavel;
    
    $variavel = "Agora sou uma string!";
    echo '<br>', $variavel;

    // Nomenclaturas de variaveis
    $var =  'válida';
    $var2 = 'válida';
    $VAR3 = 'válida';
    $_var_4 = 'válida';
    $vâr5 = 'válida'; #Evitar com acentos
    // $6var = 'invalida';
    // $%var7 = 'invalidas';
    // $var8% = 'invalida';

    echo '<br>', var_dump($_SERVER["HTTP_HOST"]);
?>