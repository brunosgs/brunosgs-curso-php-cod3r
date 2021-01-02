<div class="titulo">Desafio: Classe data</div>

<?php
class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function apresentar() {
        return date("d/m/Y", mktime(0, 0, 0, $this->mes, $this->dia, $this->ano));
    }
}

$data = new Data();
$data2 = new Data();

echo $data->apresentar();

$data2->dia = 10;
$data2->mes = 8;
$data2->ano = 2015;

echo "<br>", $data2->apresentar();

?>