<div class="titulo">Modificadores de acesso</div>

<?php
class TesteA {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo "Transmitido por herança";
    }

    private function naoMostra() {
        echo "Não vou imprimir!<br>";
    }
}

class TesteB extends TesteA {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>"; // Vai estar visivel nos filhos, subclasse
        echo "Class B) Privado = {$this->privado}<br>";

        parent::vaiPorHeranca();
    }
}

$testeA = new TesteA();
$testeA->mostrarA();
// $testeA->naoMostra();

echo '<br>';

$testeB = new TesteB();
$testeB->mostrarA();
$testeB->mostrarB();
// $testeB->naoMostra();
?>