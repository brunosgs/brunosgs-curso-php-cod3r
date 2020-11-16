<div class="titulo">Conversões</div>

<?php
    echo is_int(PHP_INT_MAX) . '<br>';

    #int para float
    echo '<br>' . var_dump(PHP_INT_MAX + 1);
    echo '<br>' . var_dump((float) 3); #cast, fazer uma conversão explícita

    #float para int
    echo '<p>Float para int</p>';
    echo '<br>' . var_dump((int) 2.8);
    echo '<br>' . var_dump(intval(2.8, 10));
    echo '<br>' . var_dump(intval('1101001101', 2)); #Função para conversões de base
    echo '<br>' . var_dump(round(2.8));

    #operações com string
    echo '<p>String</p>';
    echo '<br>' . var_dump(3 + "2");
    echo '<br>' . var_dump(3 . "2");
    echo is_string("3" . 2);
    // echo is_string("3" + 2);
    echo var_dump(1 + "cinco");
    var_dump(1 + "5 cinco");
    var_dump(1 + "cinco 5");
    echo '<br>' . var_dump(1 + "2+5");
    echo '<br>' . var_dump(1 + "3.2");
    echo '<br>' . var_dump(1 + "-3.2e2");
    echo '<br>' . var_dump((int) "10.5");
    echo '<br>' . var_dump((float) "10.5");
?>