<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
        echo('Olá');
        echo('<small>');
        echo(' Mundo!');
        echo('</small>');
    ?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'!</div>" ?>

<br>
<div>
    <button center dobro><?= "Legal"?></button>
</div>

<style>
button {
    padding: 5px <?=2*10 ?>px;
    background-color: #4286f4;
    color: #eee;
    font-weight: bold;
    border-radius: 10px;
}

/* Forma de definir um propriedade com CSS utilizando o [<nome-definido>] */
[center] {
    display: flex;
    justify-content: center;
}

[azul] {
    color: #4286f4;
}

[dobro] {
    font-size: 2rem;
}
</style>