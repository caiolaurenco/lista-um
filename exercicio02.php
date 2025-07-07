<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular a tabuada</title>
    <link rel="stylesheet" href="style.css">
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

    if (is_numeric($numero)) {
        echo "<h3>\Tabuada do $numero: </h3>";
    
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    } else{
            echo "porfavor, digite um numero valido.";
        }
}

?>

</body>
</html>