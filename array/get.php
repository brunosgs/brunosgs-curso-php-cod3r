<div class="titulo">Usando $_GET</div>

<?php
    // É possivel passar parametros pela URL, exemplo: ?nome=bruno&sobrenome=gomes
    print_r($_GET);
    echo "<br>{$_GET['nome']}";
?>