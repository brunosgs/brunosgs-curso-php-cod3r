<div class="titulo">Traits #02</div>

<?php
trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    // Dessa forma é resolvido o conflito dos nomes das funções das traits.
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao;

        validacao::validarString as validacaoSimples; // Desse modo utiliza-se um alias para modificar o nome.
    }
}

$usuario = new Usuario();

var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));

?>