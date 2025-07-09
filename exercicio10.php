<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>

<form method="POST">
    <label>Digite um número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limite = $_POST["numero"];

    function fibonacci($limite) {
        $sequencia = [];
        $a = 0;
        $b = 1;
        
        while ($a <= $limite) {
            $sequencia[] = $a;
            $proximo = $a + $b;
            $a = $b;
            $b = $proximo;
        }
        return $sequencia;
    }

    $fib = fibonacci($limite);
    echo "Sequência de Fibonacci até $limite:<br>";
    echo implode(", ", $fib);
};
?>

</body>
</html>