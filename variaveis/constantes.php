<div class="titulo">Constantes</div>

<?php
    define("TAXA_DE_JUROS", 5.9);
    echo TAXA_DE_JUROS;
    // TAXA_DE_JUROS = 2.5; Sera mostrando um alerta que não é possivel adicionar o numero a uma constante.

    const NOVA_TAXA = 2.5;
    echo "<br>" . NOVA_TAXA;

    $valorVariavel = 2.8;
    // const NOVISSIMA_TAXA = $valorVariavel; Não é possível atribuir dessa forma.
    
    const NOVISSIMA_TAXA_OP = 2.8 + 1.2; #É possível fazer dessa forma!
    echo "<br>" . NOVISSIMA_TAXA_OP;

    define("NOVISSIMA_TAXA_DEF", 3 + 1.23);
    echo "<br>" . NOVISSIMA_TAXA_DEF;

    define("NOVISSIMA_TAXA_DEF_2", $valorVariavel);
    echo "<br>" . NOVISSIMA_TAXA_DEF_2;

    // É constante do PHP
    echo "<br>" . PHP_VERSION; 
    echo "<br>" . PHP_INT_MAX;
    echo "<br>Linha: " . __LINE__;
    echo "<br>Arquivo: " . __FILE__;
    echo "<br>Diretório: " . __DIR__;
?>