<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simular um formulário de login: comparar usuário e senha com valores fixos.</title>
</head>
<body>

<form method="POST">
    <label>Usuário:</label>
    <input type="text" name="usuario" required>
    <br><br>
    <label>Senha:</label>
    <input type="password" name="senha" required>
    <br><br>
    <button type="submit">Entrar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $usuario = "caio";
    $senha = "1234caio";

    if ($usuario == $usuario & $senha == $senha) {
        echo "Login realizado com sucesso!";
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>

</body>
</html>