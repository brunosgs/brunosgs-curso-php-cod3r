<div class="titulo">Polimorfismo</div>

<?php
abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class ArrozAGrega extends Arroz {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
    }
}

$comida = new Arroz();
$comida->peso = 0.65;

$comida2 = new ArrozAGrega();
$comida2->peso = 0.25;

$comida3 = new Sorvete();
$comida3->peso = 1.5;


$pessoa = new Pessoa(83.45);
$pessoa->comer($comida);
$pessoa->comer($comida2);
$pessoa->comer($comida3);
echo $pessoa->peso;

?>