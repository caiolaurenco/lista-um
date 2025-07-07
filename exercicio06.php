<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe se é par ou impar</title>
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

  echo "Divisores de $numero: ";
  for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
      echo $i . " ";
    }
  }
  echo "\n";
}



?>

</body>
</html>