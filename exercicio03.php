<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe se é positivo, negativ ou virgula</title>
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

    if ($numero > 0) {
  echo "O número é positivo.";
} elseif ($numero < 0) {
  echo "O número é negativo.";
} else {
  echo "O número é zero.";
}
};

?>

</body>
</html>