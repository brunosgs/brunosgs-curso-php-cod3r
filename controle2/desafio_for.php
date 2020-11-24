<div class="titulo">Desafio: FOR</div>
<!-- Criar um laço for que imprima no console:
#
##
###
####
#####

1° versão - Pode utilizar incremento
2° versão - Não pode usar incremento

-->

<?php
    $arr = [
        "#",
        "##",
        "###",
        "####",
        "#####",
    ];
    
    for ($i=0; $i < count($arr); $i++) { 
        echo "{$arr[$i]}<br>";
    }

    echo '<hr>';
    
    $impressao = '';
    for ($i=0; $i < count($arr); $i++) {
        $impressao .= '#'; 
        echo "$impressao<br>";
    }

    echo '<hr>';

    for ($impressao2 = '#'; $impressao2 !== '######' ; $impressao2 .= '#') { 
        echo "$impressao2<br>";
    }
?>