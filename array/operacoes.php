<div class="titulo">Operações com arrays</div>

<?php
    $dados1 = [
        "nome" => "José",
        "idade" => 28,
    ];

    $dados2 = [
        "nome" => "Maria",
        "naturalidade" => "Fortaleza"
    ];

    $dados2["endereco"] = "Rua A"; 

    // Arrays de string com o + é possivel fazer a junção
    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);
    
    echo '<br>';
    var_dump(is_array($dadosCompletos));
    
    // is_array() verifica se a variável é um array e retorna true ou false
    echo '<br>' . is_array($dadosCompletos); 

    // count() verificar quantos elemetos tem no array
    echo '<br>' . count($dadosCompletos); 

    // array_rand() pega um indice randomicamente
    echo '<br>';
    $indice = array_rand($dadosCompletos);
    echo "$indice = $dadosCompletos[$indice]";
    
    echo '<br>';
    echo "{$dadosCompletos['idade']}";
    echo "<br>${dadosCompletos['idade']}";

    // Remover um elemento do array
    unset($dadosCompletos["nome"]);
    echo "<br>";
    print_r($dadosCompletos);

    // Remover todos elemento do array
    /*unset($dadosCompletos);
    echo "<br>";
    var_dump($dadosCompletos);*/

    $impares = [1, 3, 5, 7 , 9];
    $pares = [0, 2, 4, 6, 8];

    // A prioridade vai ser do operando próximo a esquerda, resultando no array de números pares
    $decimais = $pares + $impares;
    echo "<br>";
    print_r($decimais);

    // Função array_merge() faz a junção dos arrays
    $decimais = array_merge($pares, $impares);
    echo "<br>";
    print_r($decimais);

    // Função sort() modifica o array para ordenar
    sort($decimais);
    echo "<br>";
    print_r($decimais);
?>