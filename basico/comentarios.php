<div class="titulo">Comentários PHP</div>

<?php
    echo "Estou no PHP";
    // echo "Comentário";
    # echo "Comentário";
// Esse padrão comentários não é forte o suficiente para fechar o bloco PHP?>

<p>Depois do primeiro bloco</p>
<!--
    Esse modelo de comentário é enviado no HTML,
    inspecionar a página e veriifcar no código.

    <p>Comentário para o HTML</p>
    <p>Comentário para o HTML</p>
    <p>Comentário para o HTML</p>
-->

<?php
    /*
    Linha 1 do comentário
    Linha 2 do comentário
    Linha 3 do comentário 
?> Esse padrão de comentários é suficientemente forte para fechar o bloco */

echo "<p>Depois do segundo bloco!</p>";

?>