<div class="titulo">Criar banco (Schema)</div>

<?php
require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'create database curso_php';
$result = $conexao->query($sql);

if ($result) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>