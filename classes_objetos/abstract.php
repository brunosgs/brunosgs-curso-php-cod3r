<div class="titulo">Classe abstrata</div>

<?php
abstract class Abstrata {
    public abstract function metodo1();
    protected abstract function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() {
        echo "Executando método 1<br>";
    }

    public abstract function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1() {
        echo "Executando método 1 extendido<br>";
        parent::metodo1();
    }

    protected function metodo2($parametro) {
        echo "Executando método 2, com parametro $parametro<br>";
    }

    public function metodo3() {
        echo "Executando método 3<br>";
        $this->metodo2('interno');
    }
}

$concreta = new Concreta();

$concreta->metodo1();
// $concreta->metodo2('externo'); métodos com protected não são acessíveis externamente, só é possível com herança.
$concreta->metodo3();

echo "<br>";

var_dump($concreta instanceof Concreta);
var_dump($concreta instanceof FilhaAbstrata);
var_dump($concreta instanceof Abstrata);

?>