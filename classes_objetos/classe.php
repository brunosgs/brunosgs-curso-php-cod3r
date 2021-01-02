<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    // Atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    // o $this serve para acessar o atributo do objeto.
    public function apresentar() {
        echo "Nome: {$this->nome}<br>Idade: {$this->idade}<br>";
    }
}

// Instanciou um objeto e acessou o método da classe.
$c1 = new Cliente();
$c2 = new Cliente();

$c1->nome = 'Bruno Gomes';
$c1->idade = 27;
$c1->apresentar();

$c2->nome = 'Heloise';
$c2->idade = 25;
$c2->apresentar();

?>