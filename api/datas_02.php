<div class="titulo">Datas #02</div>

<?php
// Formantando as datas com a API
$formatoData1 = 'D, d \d\e M \d\e Y';
$foramtoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

// print_r($agora);
// echo '<br>';

echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'Brazil', 'pt_BR.utf-8');
echo $agora->format($formatoData1) . '<br>';
echo strftime($foramtoData2) . '<br>';

$dataFixa = new DateTime('1980-01-25 15:30:36');
echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

$amanha = new DateTime('+2 week');
echo strftime($foramtoData2, $amanha->getTimestamp()) . '<br>';

$amanha->modify('+1 day');
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$amanha->setDate(2000, 5, 26);
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

// Comparando datas com a API do PHP
$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-18');
$outraData = new DateTime('2030-11-18');

echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo ($outraData == $dataFutura ? 'Igual' : 'Diferente') . '<br><br>';

// Alterando timezone
$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);

echo $agora->format('d/M/Y H:i:s');

?>