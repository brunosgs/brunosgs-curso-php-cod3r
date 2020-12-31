<div class="titulo">Map e Filter</div>

<?php
    /**
     * Arredondar as notas do array percorrendo o array e 
     * usando a função round. Essa forma manual simula como a função
     * array_map funcionaria. 
     */
    $notas = [5.8, 7.3, 9.8, 6.7];
    $notasFinais1 = [];

    foreach ($notas as $nota) {
        $notasFinais1[] = round($nota); 
    }

    print_r($notasFinais1);
    echo "<br>";

    /**
     *  Arredondando as notas do array com a função array_map
     *  passando como parâmetro round e o array das notas.
     */
    $notasFinais2 = array_map('round', $notas);

    print_r($notasFinais2);

    /**
     * Filtrando o array. Essa forma manual seria como se 
     * estivesse utilizando o array_filter só que com foreach e a condição.
     */
    $apenasNotasAprovados = [];

    foreach($notas as $nota) {
        if($nota >= 7){
            $apenasNotasAprovados[] = $nota;
        }
    }

    echo "<br><br>";

    print_r($apenasNotasAprovados);
    
    /**
     * Implementando função para utilizar ela como critério no filter 
     * como um parâmetro.
     */
    
    function aprovados($nota) {
        return $nota >= 7;
    }
    
    echo "<br>";

    $apenasNotasAprovados2 = array_filter($notas, 'aprovados');

    print_r($apenasNotasAprovados2);


    /**
     * Outro exemplo de utilização do map
     */
    function calculaNota($nota) {
        $notaFinal = round($nota) + 1;
        
        return $notaFinal > 10 ? 10 : $notaFinal;
    }

    echo "<br><br>";

    $notasFinais3 = array_map('calculaNota', $notas);

    print_r($notasFinais3);
?>