<div class="titulo">Desafio: Imagens</div>
<!-- 
    - Filtrar só arquivos .png ou .jpg na lista
    - Ao invez de mostrar os links, mostrar as imagens filtradas
-->
<?php
// Verifica com a função isset se a variavel foi iniciada
if (!isset($_SESSION)) {
    session_start();
}

$arquivos = $_SESSION['arquivos'] ?? [];
$pastaUpload = __DIR__ . '/../files/'; // Caminho da pasta para upload
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmp, $arquivo)) {
    echo '<br>Arquivo válido e enviado com sucesso!';

    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo '<br>Erro no upload do arquivo!';
}

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>
<ul>
    <?php foreach ($arquivos as $arquivoImagem) : ?>
        <?php if (stripos($arquivoImagem, 'png') == true || stripos($arquivoImagem, 'jpg') == true) : ?>
            <img src="../files/<?= $arquivoImagem ?>" height="100">
        <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    input,
    button {
        font-size: 1.2rem;
    }
</style>