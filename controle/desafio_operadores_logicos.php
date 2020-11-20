<div class="titulo">Desafio: Operadores lógicos</div>

<!-- Dois trabalhos -> terça e quinta
     Requisitos:
     - Se os dois trabalhos forem executados, compra-se uma TV 50' e Sorvete
     - Se apenas 1 trabalho foi executado, compra-se um TV 32' e Sorvete
     - Se nenhum for executado, ficam em casa e nada é comprado
-->

<form action="#" method="post">
    <div>
        <label for="trabalho1">Trabalho 1 (Terça-feira):</label>
        <select name="trabalho1" id="trabalho1">
            <option value="0">Não executado</option>
            <option value="1">Executado</option>
        </select>
    </div>
    <div>
        <label for="trabalho2">Trabalho 2 (Quinta-feira):</label>
        <select name="trabalho2" id="trabalho2">
            <option value="0">Não executado</option>
            <option value="1">Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
button,
select {
    font-size: 1.4rem;
}
</style>

<?php

    /*// Minha resolução
    $trabalho1 = !!$_POST['trabalho1'];
    $trabalho2 = !!$_POST['trabalho2'];

    if($trabalho1 && $trabalho2) {
        echo "Vamos comprar a TV'50 e tomar sorvete!";
    } else if($trabalho1 != $trabalho2) {
        echo "Vamos comprar a TV'32 e tomar sorvete!";
    } else {
        echo "Ficamos em casa e não compramos nada!";
    }*/

    // Resposta
    if(isset($_POST['trabalho1']) && isset($_POST['trabalho2'])) {
        $t1 = $_POST['trabalho1'] === '1';
        $t2 = !!$_POST['trabalho2'];
        $tv = '';
        $sorvete = false;

        if($t1 && $t2) {
            $tv = "50'";
        } else if($t1 != $t2) {
            $tv = "32'";
        }

        if($t1 || $t2) {
            $sorvete = true;
        }

        if($tv) {
            $resultado = "Vamos compra uma TV de $tv";
        } else {
            $resultado = "Sem TV dessa vez :(";
        }

        $saudavel = !$sorvete;

        if($saudavel){
            $resultado .= '<br>Estamos mais saudáveis!';
        } else {
            $resultado .= '<br>Sorvete liberado!';
        }

    }
    
    echo $resultado;
?>