<div class="titulo">Desafio: Tabela #01</div>

<!-- 
    1 - Criar uma tabela e inserir os valores da matriz na tabela;
    2 - Criar uma tabela e inserir cor de fundo no <tr></tr>, caso a linha da matriz seja impar.
-->

<?php
    $matriz = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20']
    ];
?>

<table>
    <?php
        foreach ($matriz as $linha) {
            echo "<tr>";

            foreach ($linha as $valor) {
                echo "<td>$valor</td>";
            }

            echo "</tr>";
        }
    ?>
</table>

<table>
    <?php
        foreach ($matriz as $key => $linha) {
            if($key % 2 == 1) {
                echo '<tr class="blue">';
            } else {
                echo "<tr>";
            }
            
            foreach ($linha as $valor) {
                echo "<td>$valor</td>";
            }

            echo "</tr>";
        }
    ?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;

    }

    table tr.blue {
        background-color: #b3e5fc;
    }

    table td {
        border: 1px solid #444;
        padding: 10px 20px;
    }
</style>