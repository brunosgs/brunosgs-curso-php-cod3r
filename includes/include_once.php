<div class="titulo">Include/Require once</div>
<!--
    include_once adiciona o arquivo uma vez só.
-->
<?php
include('include_once_arquivo.php');
require('include_once_arquivo.php');

echo "Variável = '{$variavel}.<br>'";
$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'.<br><br>";

include('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável alterada 2';
echo "Variável = '{$variavel}'<br><br>";

include_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br><br>";

require_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";
?>