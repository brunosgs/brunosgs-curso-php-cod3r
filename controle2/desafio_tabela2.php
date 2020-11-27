<div class="titulo">Desafio: Tabela #02</div>
<form action="#" method="post">
    <label for="linha">Linha</label>
    <input type="number" min="0" value=<?= $_POST['linha'] ?? 0?> name="linha">
    <label for="coluna">Coluna</label>
    <input type="number" min="0"value=<?= $_POST['coluna'] ?? 0?> name="coluna">
    <button>Gerar</button>
</form>

<table>
    <?php
        $linha = intval($_POST['linha'] ?? 0);
        $coluna = intval($_POST['coluna'] ?? 0);
        $cont = 1;

        if($linha != 0 && $coluna != 0) {
            for ($i=0; $i < $linha; $i++) { 
                echo "<tr>";
                for ($j=0; $j < $coluna; $j++) { 
                    echo "<td>{$cont}</td>";
                    $cont++;
                }
                echo "</tr>";
            }
        } else {
            echo "Preencha a linha ou coluna!";
        }
    ?>
</table>

<style>
    form > * {
        font-size: 1.4rem;
    }

    form>input {
        width: 4.8rem;
    }

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