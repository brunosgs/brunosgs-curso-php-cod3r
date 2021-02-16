<div class="titulo">PDO: Consultar</div>

<?php
require_once 'conexao_pdo.php';

$conexao = novaConexao();
$sql = "select * from cadastro";
$result = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($result);
echo '<hr>';

$sql = "select * from cadastro limit :qtde offset :inicio";
$stmt = $conexao->prepare($sql);

$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

if ($stmt->execute()) {
    $result = $stmt->fetchAll();

    print_r($result);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo '<hr>';

// $sql = "select * from cadastro where id = ?";
$sql = "select * from cadastro where id = :id";
$stmt = $conexao->prepare($sql);

// $stmt->bindValue(':id', 17, PDO::PARAM_INT);

// if ($stmt->execute([13])) {
// if ($stmt->execute()) {
if ($stmt->execute([':id' => 17])) {
    $result = $stmt->fetch();

    print_r($result);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao = null;
$stmt = null;
?>