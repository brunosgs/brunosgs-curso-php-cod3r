<div class="titulo">Membros de classe (Static)</div>

<?php
class TesteA {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostraA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}";
        
        // Tentativa 2
        // echo "Estática = {self::$static}";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        // echo "Não estática = {$this->naoStatic}<br>";
        // echo "Estática = {$static}<br>";

        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new TesteA();
$objetoA->mostraA();
// $objetoA->mostrarStaticA(); Não é a forma ideal

// Acesso direto pela classe
echo TesteA::$static, "<br>"; 
TesteA::mostrarStaticA();

TesteA::$static = 'Alterado variável de classe (estática)';
echo TesteA::$static, "<br>";


?>