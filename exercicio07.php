<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Número Perfeito</title>
</head>
<body>
    <h1>Verificador de Número Perfeito</h1>
    
    <form method="POST">
        <label>Digite um número:</label>
        <input type="number" name="numero" required min="1">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        function somaDivisores($numero) {
            $soma = 0;
            for ($i = 1; $i <= $numero / 2; $i++) {
                if ($numero % $i == 0) {
                    $soma += $i;
                }
            }
            return $soma;
        }

        function ehPerfeito($numero) {
            return somaDivisores($numero) == $numero;
        }

        $resultado = ehPerfeito($numero);
        
        echo "<p>O número $numero ";
        echo $resultado ? "É perfeito" : "NÃO é perfeito";
        echo "</p>";
        
       
    }
    ?>
    
</body>
</html>
