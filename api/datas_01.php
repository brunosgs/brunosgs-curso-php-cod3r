<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>';

echo date('D, d \d\e M \d\e Y H:i A') . '<br>';

echo strftime('%A %d de %B de %Y', time()) . '<br>';

setlocale(LC_TIME, 'Brazil', 'pt_BR.utf-8');
echo strftime('%A %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(22, 35, 5, 3, 10, 1980);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);
?>