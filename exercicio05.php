<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números Amigos</title>
</head>

<body>
    <h1>Verificador de Números Amigos</h1>

    <form method="POST">
        <label>Digite um número:</label>
        <input type="number" name="numero1" required><br><br>
        <label>Digite outro número:</label>
        <input type="number" name="numero2" required><br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        function somaDivisores($numero)
        {
            $soma = 0;
            for ($i = 1; $i <= $numero / 2; $i++) {
                if ($numero % $i == 0) {
                    $soma += $i;
                }
            }
            return $soma;
        }

        function saoAmigos($numero1, $numero2)
        {
            $soma1 = somaDivisores($numero1);
            $soma2 = somaDivisores($numero2);

            return ($soma1 == $numero2 && $soma2 == $numero1);
        }

        if (saoAmigos($numero1, $numero2)) {
            echo "<p>$numero1 e $numero2 são números amigos!</p>";
        } else {
            echo "<p>$numero1 e $numero2 não são números amigos.</p>";
        }
    }
    ?>

</body>

</html>