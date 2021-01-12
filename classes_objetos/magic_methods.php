<div class="titulo">Métodos mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo "Construtor invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "Objeto destruído!";
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this, "<br>";
    }

    public function __get($atr) {
        echo "Lendo atributo não declarado: {$atr}<br>";
    }

    public function __set($atr, $value) {
        echo "Alterando um atributo não declarado: {$atr} / {$value}<br>";
    }

    public function __call($method, $params) {
        echo "Tentando executar o método: '{$method}',<br>";
        echo "com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Bruno', 27); // Chama o __construct

$pessoa->apresentar(); // Chama o __toString
$pessoa->nomeCompleto; // Chama o __get
$pessoa->nomeCompleto = 'Pedro'; // Chama o __set
echo $pessoa; // Chama o __toString
echo "<br><br>";
$pessoa->exec(3, 2, 'teste', true, [1, 6, 9]); // Chama o __call
echo "<br>";
$pessoa = null; // Chama o __destruct

?>