<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;

        echo "Objeto Pessoa criado!<br>";
    }

    function __destruct() {
        echo "Objeto Pessoa destruido!<br>";
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos!<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        parent::__construct($nome, $idade);
        $this->login = $login;

        echo "Objeto Usuario criado!<br>";
    }

    function __destruct() {
        echo "Objeto Usuario destruido!<br>";
        parent::__destruct();
    }

    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar(); // Chamando o método apresentar() que esta contido em Pessoa
    }
}

$usuario = new Usuario('Bruno Gomes', 27, 'brunouserteste');

$usuario->apresentar();
unset($usuario);

?>