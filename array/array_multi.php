<div class="titulo">Arrays multidimensionais</div>

<?php
    $dados = [
        [
            "nome" => "Roberto",
            "idade" => 26,
            "naturalidade" => "São Paulo"
        ],
        [
            "nome" => "Maria",
            "idade" => 25,
            "naturalidade" => "Bahia"
        ]
    ];

    print_r($dados);

    echo '<br>' . $dados[0]["idade"];
    echo '<br>' . $dados[1]["idade"] . '<br>';

    // Adiciona mais um array com informações
    $dados[] = [
        "nome" => "Florinda",
        "idade" => 30,
        "naturalidade" => "Cidade do México"
    ];

    print_r($dados);
    echo '<br>' . $dados[2]["idade"];

    // Adiciona mais um item ao array pelo indice, que está dentro do array de $dados
    $dados[2]["vizinho"] = "Chaves";
    echo '<br>';
    print_r($dados[2]);

    // Remover elemento usando unset pelo indice só que não reordena os índices.
    unset($dados[1]);
    echo '<br>';
    print_r($dados);
?>