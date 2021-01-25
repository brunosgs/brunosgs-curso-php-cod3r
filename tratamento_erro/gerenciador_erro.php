<div class="titulo">Error Handler</div>

<?php
/**
 * Usando esta função você pode definir o nível de erros 
 * a ser mostrado, durante a execução.s
*/
error_reporting(E_ERROR);
echo 4 / 0 . '<br><hr>';

// Ativado para que mostre todos os erros.
error_reporting(E_ALL);
echo 4 / 0 . '<br><hr>';

error_reporting(~E_ALL);
echo 4 / 0 . '<br><hr>';

error_reporting(E_ALL);
// echo 4 / 0 . '<br>';
// include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring) {
    $text = 'include';
    // $text = 'by zero';

    return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);
include 'arquivo_inexistente.php';
echo 4 / 0 . '<br><hr>';

restore_error_handler();
include 'arquivo_inexistente.php';
echo 4 / 0 . '<br>';
?>