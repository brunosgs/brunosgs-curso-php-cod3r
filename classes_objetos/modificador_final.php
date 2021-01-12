<div class="titulo">Modificador final</div>

<?php
abstract class Abstrata {
    public abstract function metodo1();

    public final function metodo2() {
        echo "Não vou mudar, sou final!<br>";
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo "Executando método 1<br>";
    }

    /*public function metodo2() {
        echo "Extends método 2";
    }*/
}

$teste = new Classe();

$teste->metodo1();
$teste->metodo2();

final class Unica {
    public $atr1 = 'Valor único!';
}

// class Duplicata extends Unica {
//     public $atr2;
// }

$unica = new Unica();

echo $unica->atr1;

?>