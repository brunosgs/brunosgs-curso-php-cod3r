<?php namespace Outro\Nome; ?>

<div class="titulo">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';
include('use_as_arquivo.php');

function soma($a, $b) {
    return $a . $b; // Simulando funções iguais
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo  \Nome\Bem\Grande\constante . '<br>';

use const Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx; // Utilizando alias para abreviação do caminho

echo soma(1, 2) . '<br>';
echo ctx\soma(1,2) . '<br>';

/**
 * Ao declarar dessa forma: use function Nome\Bem\Grande\soma;
 * estara conflitando o nome soma, pois nesse namespace já existe a function soma.
 * A forma correta seria dar um alias e ela:
 */
use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100, 102) . '<br>';

$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

use Nome\Bem\Grande\Classe as D;

$d = new D();
$d->func();

?>