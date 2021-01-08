<div class="titulo">Desafio: 7 erros</div>
<!-- 
CÓDIGO COM ERROS:

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata extends Template {
    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe implements ClasseAbstrata {
    function __construct($parametro) {
    }
}

$exemplo = Classe();
$exemplo.metodo3();


    1° ERRO: A ClasseAbstrata não extends ela implements;
    2° ERRO: A Classe não implements, ela vai extends;
    3º ERRO: Metodo1 não foi implementado;
    4° ERRO: Metodo2 não foi implementado;
    5º ERRO: O objeto $exemplo não foi instanciado = new;
    6º ERRO: Não foi passado o parametro do objeto instanciado;
    7° ERRO: A forma de chamada do método3 é com -> não .;
-->

<?php
interface Template {
    public function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando<br>";
    }

    public function metodo1() {
        echo "Método 1<br>";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro) {
       
    }

    public function metodo2($parametro) {
        echo "Método 2 $parametro<br>";
    }
}

$exemplo = new Classe('...');
$exemplo->metodo3();

?>