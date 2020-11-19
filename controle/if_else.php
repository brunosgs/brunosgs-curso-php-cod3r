<div class="titulo">IF / ELSE</div>

<?php
    if(true) {
        echo "Serei impresso?";
        echo "<br>Serei impresso?<br>";
    }

    if(false){
        echo "Verdadeiro!<br>";
    } else {
        echo "Falso!<br>";
    }

    if(false) {
        echo "Passo A<br>";
    } else if(false) {
        echo "Passo B<br>";
    } else if(false) {
        echo "Passo C<br>";
    } else if(true) {
        echo "Passo D<br>";
    } else if(true) {
        echo "Passo E<br>";
    } else {
        echo "Último passo";
    }

?>