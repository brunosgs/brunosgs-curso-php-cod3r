<div class="titulo">Desafio: Palíndromo</div>

<!-- 
    O objetivo do desafio e verificar se a palavra é um Palíndromo:
        
        1º Usar um laço for para dectectar as letras e verificar se são iguais
        2º Utilizar alguma função da API String, verificar na documentação
-->

<form action="#" method="post">
    <label for="palindromo">Palíndromo</label>
    <input type="text" name="palindromo">
    <button>Verificar</button>
</form>  

<?php
    $palavra = strtolower($_POST['palindromo']);
    
    echo verificaPalindromoFor($palavra);
    verificaPalindromoFuncao($palavra);

    // Utilizando for para verifcar se a string é um palíndromo
    function verificaPalindromoFor($palavra) {
        $final = mb_strlen($palavra) - 1;

        for ($i = 0; $i <= $final; $i ++) { 
            if($palavra[$i] !== $palavra[$final - $i]) {
                return 'Não<br>';
            }
        }

        return 'Sim<br>';
    }

    // Utilzando função para inverter e string e verficar se é um palíndromo
    function verificaPalindromoFuncao($palavra) {
        $palindromo = strrev($palavra);

        if($palindromo === $palavra) {
            echo "A palavra " . $_POST['palindromo'] . " é um palíndromo!";
        } else {
            echo "A palavra " . $_POST['palindromo'] . " não é um palíndromo!";
        }
    }
?>

<style>
    form > * {
        font-size: 1.4rem;
    }

    form>input {
        width: 13rem;
    }
</style>