<div class="titulo">Desafios: Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="celsius-fahrenheit">Celcius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celcius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
form>* {
    font-size: 1.4rem;
}
</style>

<?php
    const MILHAS = 1.609;
    const KM = 1000;
    const CELSIUS_FAHRENHEIT = 1.8;
    $entrada = $_POST['param'] ?? 0;
    $converter = $_POST['conversao'] ?? null;
    
    if(isset($converter)) {
        switch (strtolower($converter)) {
            case 'km-milha':
                $resultado = $entrada / MILHAS;
                echo "Resultado: $resultado milhas";
                
                break;
            case 'milha-km':
                $resultado = $entrada * MILHAS;
                echo "Resultado: $resultado km";

                break;
            case 'metro-km':
                $resultado = $entrada / KM;
                echo "Resultado: $resultado km";

                break;
            case 'km-metro':
                $resultado = $entrada * KM;
                echo "Resultado: $resultado metros";

                break;
            case 'celsius-fahrenheit':
                $resultado = ($entrada * CELSIUS_FAHRENHEIT) + 32;
                echo "Resultado: {$resultado}° Fahrenheit";

                break;
            case 'fahrenheit-celsius':
                $resultado = ($entrada - 32) / CELSIUS_FAHRENHEIT;
                echo "Resultado: {$resultado}° Celsius";

                break;
            default:
                echo "Não é possível converter!";
                
                break;
        }
    }
?>