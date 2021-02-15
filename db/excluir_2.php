<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir registro #02</div>

<?php
require_once 'conexao.php';

$conexao = novaConexao();

if (isset($_GET['excluir'])) {
    $sqlExcluir = "delete from cadastro where id = ?";
    $stmt = $conexao->prepare($sqlExcluir);

    $stmt->bind_param('i', $_GET['excluir']);
    $stmt->execute();
}

$sql = "select id, nome, nascimento, email from cadastro";
$result = $conexao->query($sql);
$registros = [];


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?= $registro['email'] ?></td>
                <td>
                    <a href="/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table>* {
        font-size: 1.4rem;
    }
</style>