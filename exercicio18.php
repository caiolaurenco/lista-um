<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber 3 números e informar qual é o maior</title>
</head>
<body>

<form method="POST">
    <label>Digite o primeiro número:</label>
    <input type="number" name="numero1" required>
    <br>
    <label>Digite o segundo número:</label>
    <input type="number" name="numero2" required>
    <br>
    <label>Digite o terceiro número:</label>
    <input type="number" name="numero3" required>
    <br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = floatval($_POST["numero1"]);
    $numero2 = floatval($_POST["numero2"]);
    $numero3 = floatval($_POST["numero3"]);

    $maior = $numero1;

    if ($numero2 > $maior) {
        $maior = $numero2;
    }
    if ($numero3 > $maior) {
        $maior = $numero3;
    }

    echo "O maior número é: " . htmlspecialchars($maior);
}
?>

</body>
</html>