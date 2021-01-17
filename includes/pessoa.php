<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Instância de Pessoa criada<br>";
    }

    function __destruct() {
        echo "Instância de Pessoa destruída!<br>";
    }

    public function apresentar() {
        echo "Nome: {$this->nome} e Idade: {$this->idade}<br>";
    }
}

?>