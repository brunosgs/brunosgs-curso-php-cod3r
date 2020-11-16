<div class="titulo">Tipo: boolean</div>

<?php
    echo true, '<br>'; #Vai converter para 1
    echo false; #False não é convertido
    echo '<br>' . var_dump(true); 
    echo '<br>' . var_dump(false);
    echo '<br>' . var_dump('false');
    echo '<br>' . is_bool(false); #Detecta se o valor é boolean

    # Fazer as regras de conversões
    echo '<p>Regras:</p>';
    echo '<br>' . var_dump((bool) 0); # Apenas 0 sera convertido para false dos inteiros
    echo '<br>' . var_dump((bool) 20);
    echo '<br>' . var_dump((bool) -1);
    echo '<br>' . var_dump((bool) 0.0);
    echo '<br>' . var_dump((bool) 0.00000001);
    echo '<br>' . var_dump((bool) "");  # false
    echo '<br>' . var_dump((bool) "0"); # false
    echo '<br>' . var_dump((bool) " "); # todo resto é verdadeiro
    echo '<br>' . var_dump((bool) "00");
    echo '<br>' . var_dump((bool) "false");
    
    echo '<br>' . var_dump(!!"false"); #Dupla negação
?>