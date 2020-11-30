<div class="titulo">Argumentos e retorno</div>

<?php
    function obterMensagem() {
        return 'Seja bem vindo(a)!';
    }

    function obterMensagemComNome($nome) {
        return "Bem vindo, {$nome}!";
    }

    function soma($n1, $n2) {
        return $n1 + $n2;
    }

    function trocaValorCopia($n, $novoValor) {
        $n = $novoValor;
    }

    function trocaValorReferencia(&$n, $novoValor) {
        $n = $novoValor;
    }

    echo obterMensagem();
    $mensagem = obterMensagem();
    echo "<br>$mensagem<br>";
    var_dump(obterMensagem());

    echo "<br>", obterMensagemComNome("Bruno");

    $x = 10;
    $y = 15;
    echo "<br>", soma(5, 6);
    echo "<br>", soma($x, $y);

    $variavel = 1;
    trocaValorCopia($variavel, 3);
    echo '<br>', $variavel;
    
    trocaValorReferencia($variavel, 5);
    echo '<br>', $variavel;
?>