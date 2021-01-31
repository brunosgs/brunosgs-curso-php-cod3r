<div class="titulo">Escrevendo em arquivos</div>

<?php
$arquivo = fopen('teste.txt', 'w');

fwrite($arquivo, "Valor inicial\n");

$str = "Segunda linha\n";

fwrite($arquivo, $str);
fclose($arquivo);

/**
 * A partir do momento que o arquivo foi fechado com fclose() e
 * venha a ser aberto novamente com o modo escrita 'w', o mesmo é totalmente sobrescrito.
 */
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");

/** 
 * Caso o arquivo seja aberto em modo 'a' apêndice, o ponteiro vai pro final do
 * arquivo, assim adicionando novos itens sem sobrescrever o arquivo.
 */

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, " e novos valores\n");
fwrite($arquivo, "Adicionado em um segundo momento").
fclose($arquivo);

// Caso tente abrir o arquivo utilizando o modo 'x', o mesmo vai gerar erro
$arquivo = fopen('teste.txt', 'x');

?>