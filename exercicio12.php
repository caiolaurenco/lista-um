<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais</title>
</head>
<body>

<form method="POST">
    <label>Digite uma palavra ou frase:</label>
    <input type="text" name="texto" required>
    <button type="submit">Contar Vogais</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];

    function contarVogais($palavra) {
        $str = mb_strtolower($palavra, 'UTF-8');
        preg_match_all('/[aeiouáéíóúãõâêîôûàèìòù]/i', $palavra, $matches);
        return count($matches[0]);
    }

    $quantidade = contarVogais($texto);

    echo "A quantidade de vogais em \"" . htmlspecialchars($texto) . "\" é: " . $quantidade;
}
?>

</body>
</html>
