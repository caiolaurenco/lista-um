<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calcular IMC a partir do peso e altura e exibir a categoria</title>
</head>
<body>

<form method="POST">
    <label>Digite a sua altura (em metros):</label>
    <input type="number" name="altura" step="any" required>
    <br><br>
    <label>Digite o seu peso (em kg):</label>
    <input type="number" name="peso" step="any" required>
    <br><br>
    <button type="submit">Calcular o IMC</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = floatval($_POST["altura"]);
    $peso = floatval($_POST["peso"]);

    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
        echo "<p>Seu IMC é: <strong>" . number_format($imc, 2) . "</strong></p>";

        if ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
        } elseif ($imc < 24.9) {
            echo "<p>Classificação: Peso normal</p>";
        } elseif ($imc < 29.9) {
            echo "<p>Classificação: Sobrepeso</p>";
        } else {
            echo "<p>Classificação: Obesidade</p>";
        }
    } else {
        echo "<p>Altura inválida.</p>";
    }
}
?>

</body>
</html>