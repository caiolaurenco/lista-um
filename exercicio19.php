<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Receber uma senha e verificar se ela é forte.</title>
</head>
<body>

<form method="POST">
    <label>Digite uma senha:</label>
    <input type="password" name="senha" required>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"];

    function senhaForte($s) {
        return strlen($s) >= 8 && preg_match('/[A-Za-z]/', $s) && preg_match('/[0-9]/', $s);
    }

    if (senhaForte($senha)) {
        echo "Senha forte!";
    } else {
        echo "Senha fraca. Deve ter pelo menos 8 caracteres, incluindo letras e números.";
    }
}
?>

</body>
</html>