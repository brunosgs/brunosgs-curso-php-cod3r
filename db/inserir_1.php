<div class="titulo">Inserir registro #01</div>

<?php
require_once "conexao.php";

$sql = "insert into cadastro (nome, nascimento, email, site, filhos, salario)
    values(
        'Andre Miranda',
        '1999-09-01',
        'miranda_andrey@yahoo.com.br',
        'http://mirandaandre.io',
        0,
        19800.14
    )";

$conexao = novaConexao();
$result = $conexao->query($sql);

if ($result) {
    echo 'Sucesso :)';
} else {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();
?>