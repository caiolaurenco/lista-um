<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular fatorial</title>
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

    function calcularFatorial($numero) {
  if ($numero <= 1) {
    return 1;
  } else {
    return $numero * calcularFatorial($numero - 1);
  }
}

  echo "O fatorial de " . $numero . " é " . calcularFatorial($numero);
};

?>

</body>
</html>