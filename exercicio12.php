<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais</title>
</head>
<body>

<form method="POST">
    <label>Digite um texto:</label>
    <input type="text" name="texto" required>
    <button type="submit">Contar Vogais</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];

    function contarVogais($texto) {
        $vogais = ['a', 'e', 'i', 'o', 'u'];
        $contador = 0;
        
        $texto = strtolower($texto); 
        
        for ($i = 0; $i < strlen($texto); $i++) {
            if (in_array($texto[$i], $vogais)) {
                $contador++;
            }
        }
        return $contador;
    }

    $totalVogais = contarVogais($texto);
    echo "O texto \"" . htmlspecialchars($texto) . "\" contém " . $totalVogais . " vogais.";
};
?>

</body>
</html>