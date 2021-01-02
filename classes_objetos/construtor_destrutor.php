<div class="titulo">Construtor e destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'Destruido!<br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

// $teste = new Pessoa(); Não é possivel criar o objeto sem os parametros

$pessoa = new Pessoa('Heloise');

$pessoa->apresentar();

unset($pessoa);

$pessoaB = new Pessoa('Bruno', 27);

$pessoaB->apresentar();

$pessoaB = null;

?>