<div class="titulo">Mapa</div>

<?php
    $dados = array(
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );

    print_r($dados);

    echo '<br>' . $dados["idade"];
    echo '<br>' . $dados["cor"];
    echo '<br>' . $dados["peso"];
    echo '<br>' . $dados[0]; // Retorna NULL

    // OBS: Mater um padrão, não utilizar indice e chave juntos em um array.
  /*$listaExemplo = array(
        "a",
        "teste" => "teste1",
        "c",
        5 => "teste3"
    );*/

    print_r($listaExemplo);
    
    $listaExemplo[] = 'i';
    $listaExemplo['indiceTeste'] = 'j';
    echo '<br>';
    print_r($listaExemplo);
?>