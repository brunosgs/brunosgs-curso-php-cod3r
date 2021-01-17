<?php
require_once('pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        parent::__construct($nome, $idade);
        $this->login = $login;

        echo "Instância de Usuario criada!<br>";
    }

    function __destruct() {
        parent::__destruct();

        echo "Instância de Usuario destruída<br>";
    }

    public function apresentar() {
        echo "@{$this->login}<br>";
        parent::apresentar();
    }
}

?>