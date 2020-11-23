<div class="titulo">Desafio: Sorteio</div>

<?php
    $nomesPersonagens = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];
    $indice = array_rand($nomesPersonagens);
    $nomeRandom = $nomesPersonagens[$indice];

    echo "<div center><h1>$nomeRandom</h1></div>"
?>

<style>
[center] {
    display: flex;
    justify-content: center;
}
</style>