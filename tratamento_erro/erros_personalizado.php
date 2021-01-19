<div class="titulo">Erros personalizados</div>

<?php
class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
        // echo "Erro personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade) {
    if($idade < 18) {
        throw new FaixaEtariaException('Ainda não possui 18 anos!');
    }

    if($idade > 70) {
        throw new FaixaEtariaException('Já deve estar aposentando!');
    }

    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80];

foreach($idadesAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br><br>";
    } catch(FaixaEtariaException $fex) {
        echo "Não foi possível calcular para $idade anos.<br>";
        echo "Motivo: {$fex->getMessage()}<br><br>";
    }
}

?>