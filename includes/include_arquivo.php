<?php 
echo 'Carregando: include_arquivo<br>';

$variavel = 'Estou definida';

/**
 * No arquivo include, foi feito 2x o include de 'include_arquivo', 
 * nessa situação seria como definir o método soma 2x também, para evitar isso
 * foi utilizado o o método function_exists para verificar se o método já existe.
 */

if(!function_exists('soma')) {
    function soma($a, $b) {
        return $a + $b;
    }
}

?>