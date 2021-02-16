<div class="titulo">PDO: Alterar</div>

<?php
require_once "conexao_pdo.php";

$sql = "update cadastro set
        nome = ?,
        nascimento = ?,
        email = ?,
        site = ?,
        filhos = ?,
        salario = ?
        where id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$result = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gui.com.br',
    'http://gui.co',
    1,
    12000,
    18
]);

if ($result) {
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}

?>