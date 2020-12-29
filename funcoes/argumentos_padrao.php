<div class="titulo">Argumentos padrão</div>

<?php
    function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente") {
        return "Bem vindo, $nome $sobrenome!<br>";
    }

    echo saudacao();
    echo saudacao(NULL);
    echo saudacao(NULL, NULL);
    echo saudacao("Mestre", "Supremo");

    // Dica: inserir parametro padrão sempre por último.
    function anotarPedido($comida, $bebida = "Água") {
        echo "Para comer: $comida<br>";
        echo "Para beber: $bebida<br>";
    }

    echo "<br>";
    anotarPedido("X Salada");
    anotarPedido("X Coração", "Suco");
?>