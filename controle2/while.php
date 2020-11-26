<div class="titulo">WHILE / DO WHILE</div>


<?php
    const VALOR_LIMITE = 5;
    $contador = 0;

    while ($contador < VALOR_LIMITE) {
        echo "WHILE $contador<br>";
        $contador++;
    }
    echo "<br>";

    $contador = 0;
    do {
        echo "DO WHILE $contador<br>";
        $contador++;
    } while ($contador < VALOR_LIMITE);
    echo "<br>";
    
    $contador = 0;
    while (true) {
        echo "WHILE(TRUE) $contador<br>";
        $contador++;
        
        if($contador >= VALOR_LIMITE) {
            break;
        }
    }


?>