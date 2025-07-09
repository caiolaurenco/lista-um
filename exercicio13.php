<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Celsius para Fahrenheit</title>
</head>
<body>

<form method="POST">
    <label>Digite a temperatura em Celsius:</label>
    <input type="number" name="celsius" required>
    <button type="submit">Converter</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = floatval($_POST["celsius"]);

    function celsiusParaFahrenheit($c) {
        return ($c * 9/5) + 32;
    }

    $fahrenheit = celsiusParaFahrenheit($celsius);

    echo "A temperatura de " . htmlspecialchars($celsius) . "°C em Fahrenheit é: " . round($fahrenheit, 2) . "°F";
}
?>

</body>
</html>
