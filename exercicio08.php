<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Números Pares</title>
</head>
<body>

<form method="POST">
    <label>Digite um número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    function contarPares($numero) {
        $contador = 0;
        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                $contador++;
            }
        }
        return $contador;
    }

    $totalPares = contarPares($numero);
    echo "Existem " . $totalPares . " números pares entre 1 e " . $numero;
};
?>

</body>
</html>