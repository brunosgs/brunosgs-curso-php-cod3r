<div class="titulo">Tipo: String</div>

<?php
    echo 'Eu sou uma string <br>';
    var_dump("Eu também");

    # Concatenação
    echo "<br>Nós também" . ' somos';
    echo '<br>', "Também aceito", " virgulas";
    echo "<br>'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\"" . " \\";

    print("<br>Também existe a função print");
    print "<br>Também existe a função print, sem ()";

    # Funções
    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('MINIMIZADO');
    echo '<br>' . ucfirst('Só a primeira letra...');
    echo '<br>' . ucwords('todas as palavras');
    echo '<br>' . strlen('Quantas letras?');
    echo '<br>' . mb_strlen('Eu também'); # A função mb_strlen calcula sem encocodig, sem o acento;
    echo '<br>' . substr('Só uma parte da string', 7, 6);
    echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
?>