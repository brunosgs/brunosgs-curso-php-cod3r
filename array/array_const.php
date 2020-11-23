<div class="titulo">Arrays constantes</div>

<?php
    const FRUTAS = array('laranja', 'abacaxi');

    // FRUTAS[0] = 'banana'; Um array constante, os elementos não podem ser alterados
    // FRUTAS[] = 'banana'; Não é possivel também adicionar elementos novas a um array constante

    echo FRUTAS[0];

    const CARROS = [
        "fiat" => "uno",
        "ford" => "fiesta"
    ];

    echo '<br>' . CARROS["fiat"];

    define('CIDADES', [
        "belo horizonte", "recife"
    ]);

    echo '<br>' . CIDADES[0];
?>