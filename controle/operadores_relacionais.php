<div class="titulo">Operadores relacionais</div>
<style>
p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>

<?php
    echo "<br>" . var_dump(1 == 1);
    echo "<br>" . var_dump(1 > 1);
    echo "<br>" . var_dump(1 >= 1);
    echo "<br>" . var_dump(1 != 1);
    echo "<br>" . var_dump(1 <> 1);

    echo "<br>" . var_dump(1 == "1");
    echo "<br>" . var_dump(1 === "1"); // Igualdade estrita
    echo "<br>" . var_dump(1 !== "1"); // Igualdade estrita
    echo "<br>" . var_dump(1 != "1"); 

    echo "<p>Relacionais no IF/ELSE</p><hr>";

    $idade = 28;

    if($idade < 18){
        echo "Menor de idade: $idade anos";
    } else if($idade < 65) {
        echo "Adulto: $idade anos";
    } else {
        echo "Terceira idade: $idade anos";
    }

    echo "<p>Spaceship</p><hr>";
    var_dump(5 <=> 3);
    var_dump(50 <=> 50);
    var_dump(5 <=> 50);
    
    echo "<p>Valores pode ser verdadeiro(V) ou falso(F)</p><hr>";
    var_dump(!!5);
    var_dump(!!0);
    var_dump(!!"");
    var_dump(!!" ");
?>