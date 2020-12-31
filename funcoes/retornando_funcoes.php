<div class="titulo">Retornado funções</div>


<?php
    function soma($a) {
        return function($b) use($a){
            return $a + $b;
        };
    }

    echo soma(3)(3);

    $doisMais = soma(5);
    echo "<br>" . $doisMais(15);
?>