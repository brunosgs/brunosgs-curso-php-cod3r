<div class="titulo">Lendo arquivos</div>

<?php
// Lendo o arquivo definindo um valor estático de bytes
$arquivo = fopen('teste.txt', 'r');

echo fread($arquivo, 10) . '<br>';
echo fread($arquivo, 10) . '<br>';
fclose($arquivo);
echo '<hr>';

// Lendo o arquivo utlizando a função filesize() para verificar o tamanho do arquivo
$arquivo = fopen('teste.txt', 'r');
$tamanhoArquivo = filesize('teste.txt');

echo "Tamanho do arquivo: $tamanhoArquivo<br>"; 
echo fread($arquivo, $tamanhoArquivo);
fclose($arquivo);
echo '<hr>';

$arquivo = fopen('teste.txt', 'r');

echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo)) . '<br>';
fclose($arquivo);
echo '<hr>';

// A função feof() verifica se contem dados no arquivo
$arquivo = fopen('teste.txt', 'r');

while(!feof($arquivo)) {
    echo fgets($arquivo) . '<br>';
}

fclose($arquivo);
echo '<hr>';

$arquivo = fopen('teste.txt', 'r');

while(!feof($arquivo)) {
    // fgetc le caracter por caracter
    echo fgetc($arquivo) . '<br>';
}

fclose($arquivo);
echo '<hr>';

/**
 * O modo 'r+' significa que mesmo sendo em leitura, é possivel 
 * adicionar mais dados ao arquivo.
 */
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdionado durante a leitura do arquivo");
fclose($arquivo);

?>