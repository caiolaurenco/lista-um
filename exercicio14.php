<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se um ano é bissexto</title>
</head>
<body>

<form method="POST">
    <label>Digite um ano:</label>
    <input type="number" name="ano" required>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = intval($_POST["ano"]);

    function ehBissexto($ano) {
        return ($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0);
    }

    if (ehBissexto($ano)) {
        echo "O ano " . htmlspecialchars($ano) . " é bissexto.";
    } else {
        echo "O ano " . htmlspecialchars($ano) . " não é bissexto.";
    }
}
?>

</body>
</html>