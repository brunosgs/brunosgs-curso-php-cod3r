<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Consultar registros</div>

<?php
require_once "conexao.php";

$sql = "select id, nome, nascimento, email from cadastro";
$conexao = novaConexao();
$result = $conexao->query($sql);
$registros = [];

//Verifica se existe linhas na consulta
if ($result->num_rows > 0) {
    // fetch_assoc retorna um array associativo
    while ($row = $result->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo 'Erro: ' . $conexao->error;
}

$conexao->close();
?>

<table class="table table-striped table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?= $registro['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table>* {
        font-size: 1.4rem;
    }
</style>