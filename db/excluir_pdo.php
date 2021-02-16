<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";

$sql = "delete from cadastro where id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

if($stmt->execute([15])) {
    echo "Sucesso :)";
} else {
    echo "Erro :( ";
    print_r($stmt->errorInfo());  
}

?>