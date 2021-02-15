<div class="titulo">Excluir registro #01</div>

<?php
require_once "conexao.php";

$sql = "delete from cadastro where id = 2";
$conexao = novaConexao();
$result = $conexao->query($sql);

if ($result) {
    echo 'Sucesso :)';
} else {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();
?>