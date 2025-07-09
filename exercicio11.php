<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Palíndromo</title>
</head>
<body>

<form method="POST">
    <label>Digite uma palavra:</label>
    <input type="text" name="palavra" required>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST["palavra"];

    function ehPalindromo($palavra) {
        $palavra = strtolower($palavra); 
        $palavra = preg_replace('/[^a-z0-9]/', '', $palavra); 
        return $palavra == ($palavra);
    }

    $resultado = ehPalindromo($palavra);
    
    echo "A palavra \"" . ($palavra) . "\" ";
    echo $resultado ? "É um palíndromo!" : "NÃO é um palíndromo";
};
?>

</body>
</html>