<div class="titulo">Include função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel . "<br>";
    echo soma(2, 6) . "<br>";
}

echo 'Novamente no arquvivo include_funcao<br>';
// echo soma(1, 8);
carregarArquivo();

/**
 * Nesse contexto a variável esta como null, como houve a importação/include 
 * interna na função carregarArquivo(), acaba que externamente, a $variavel não foi declarada
 * no contexto de include_funcao, assim não conseguindo acessar diretamente.
 */
echo "Variável = '{$variavel}'";
// var_dump($variavel);
echo '<br>', soma(5, 8);

?>