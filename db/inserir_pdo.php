<div class="titulo">PDO: Inserir</div>

<?php
require_once "conexao_pdo.php";

$sql = "insert into cadastro (nome, nascimento, email, site, filhos, salario)
        values (
            'Elisa',
            '1975-01-26',
            'eli@mail.com.br',
            'http://www.eli.com.br',
            2,
            3578.12
        )";

$conexao = novaConexao();

// get_class_methods() infoma quais os métodos de uma classe
// print_r(get_class_methods($conexao)); 

if ($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . '<br>';
    print_r($conexao->errorInfo());
}
?>