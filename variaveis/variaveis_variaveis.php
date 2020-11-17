<div class="titulo">Variáveis variáveis</div>

<?php
    $a = 'valorA';
    $$a = 'valorAA';
    echo "$a <br>{$$a} <br>${$a} <br>{$valorA}";

    $epa = 'opa';
    $opa = 'vish';
    $vish = 'eita!!!';
    echo "<br><br>$epa {$$epa} {$$$epa}";
?>