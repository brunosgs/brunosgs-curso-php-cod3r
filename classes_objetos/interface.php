<div class="titulo">Interface</div>

<?php
/*
  - Na interface é definido métodos/comportamentos que devem ser implementados 
  a partir das classes. 

  - Os métodos são por padrão públicos, não é possivel definir
  eles como private ou protected.

  - Uma classe não pode herdar de múltiplas classes.
*/
interface Animal {
    function respirar();
}

interface Canino extends Animal {
    function latir(): string;
}

class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!";
    }

    function latir(): string {
        return "Au au!";
    }
}

$animal = new Cachorro();

echo $animal->respirar(), "<br>";
echo $animal->latir(), "<br>";

echo "<br>";
var_dump($animal);

echo "<br>";
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Animal);

?>