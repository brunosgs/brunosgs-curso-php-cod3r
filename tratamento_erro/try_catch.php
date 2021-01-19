<div class="titulo">Try/Catch</div>

<?php
// echo 7 / 0;

try {
    echo intdiv(7, 0);
} catch(Error $e) {
    echo 'Teve um erro aqui 1<br>';
}

try {
    throw new Exception('Erro de exception lançado pelo throw new');
    echo intdiv(7, 0);   
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
} catch(Throwable $th) {
    echo 'Erro encontrado: ' . $th->getMessage() . '<br>';
} finally {
    echo 'Sempre executado!<br>';
}

echo 'Execução continua...<br>';

?>