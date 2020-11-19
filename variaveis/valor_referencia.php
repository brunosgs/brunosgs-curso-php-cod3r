<div class="titulo">Valor vs Referência</div>

<?php
    $variavel = "valor inicial";
    echo $variavel;

    // Atribuição por VALOR
    $variavelValor = $variavel;
    echo "<br> $variavelValor";

    $variavelValor = 'novo valor';
    echo "<br> $variavel";
    echo "<br> $variavelValor";

    // Atribuição por REFERÊNCIA
    $variavelReferencia = &$variavel;
    echo "<br> $variavelReferencia";
    
    $variavelReferencia = 'mesma referencia';
    echo "<br> $variavel";
    echo "<br> $variavelReferencia";
?>