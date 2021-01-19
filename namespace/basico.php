<?php namespace contexto; ?>

<div class="titulo">Básico</div>

<?php
echo __NAMESPACE__ . '<br>';

const constante1 = 123;

// Criando constantes diferentes para acesso
define('constante2', 234);
define('contexto\constante2', 1234);
define(__NAMESPACE__ . '\constante3', 375);
define('outro_namespace\constante4', 789);

// Formas de acessar as constante pelo namespace ou pela raiz
echo constante1 . '<br>';
echo constante2 . '<br>';
echo \constante2 . '<br>'; // Aqui acessa a constante no raiz
echo \contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
// echo constante4;
echo \outro_namespace\constante4 . '<br>';

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(3, 6) . '<br>';
echo soma(3, 6) . '<br>';

// Sobrescrevendo uma função já existente no PHP e acesso pelo namespace raiz
function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    
    return 1;
}

echo strpos('Texto genérico para busca', 'busca'). '<br>';
echo \strpos('Texto genérico para busca', 'busca'). '<br>';

?>
 