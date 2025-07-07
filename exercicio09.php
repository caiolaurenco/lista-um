<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números no Intervalo</title>
</head>
<body>

<form method="POST">
    <label>Digite o primeiro número:</label>
    <input type="number" name="numero1" required><br><br>
    
    <label>Digite o segundo número:</label>
    <input type="number" name="numero2" required><br><br>
    
    <button type="submit">Calcular Soma</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    function somarIntervalo($num1, $num2) {
        $soma = 0;
        $inicio = min($num1, $num2);
        $fim = max($num1, $num2);
        
        for ($i = $inicio; $i <= $fim; $i++) {
            $soma += $i;
        }
        return $soma;
    }

    $resultado = somarIntervalo($numero1, $numero2);
    echo "A soma de todos os números entre $numero1 e $numero2 é: " . $resultado;
};
?>

</body>
</html>