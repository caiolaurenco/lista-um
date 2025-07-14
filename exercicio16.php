<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Receber nome e idade e informar se a pessoa pode votar</title>
</head>
<body>

<form method="POST">
    <label>Digite seu nome:</label>
    <input type="text" name="nome" required>
    <br><br>
    <label>Digite sua idade:</label>
    <input type="number" name="idade" required>
    <br><br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $idade = intval($_POST["idade"]);

    echo "<p>Olá, <strong>$nome</strong>!</p>";

    if ($idade < 16) {
        echo "<p>Você não pode votar.</p>";
    } elseif (($idade >= 16 && $idade <= 17) || $idade > 70) {
        echo "<p>Voto facultativo.</p>";
    } else {
        echo "<p>Voto obrigatório.</p>";
    }
}
?>

</body>
</html>
