<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Receber uma data e validar se é uma data válida</title>
</head>
<body>

<form method="POST">
    <label>Dia:</label>
    <input type="number" name="dia" required>
    <br><br>
    <label>Mês:</label>
    <input type="number" name="mes" required>
    <br><br>
    <label>Ano:</label>
    <input type="number" name="ano" required>
    <br><br>
    <button type="submit">Validar Data</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = intval($_POST["dia"]);
    $mes = intval($_POST["mes"]);
    $ano = intval($_POST["ano"]);

    if (checkdate($mes, $dia, $ano)) {
        echo "<p>A data <strong>$dia/$mes/$ano</strong> é válida.</p>";
    } else {
        echo "<p>A data <strong>$dia/$mes/$ano</strong> não é válida.</p>";
    }
}
?>

</body>
</html>
