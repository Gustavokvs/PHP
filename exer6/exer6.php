<?php

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["numero"]) && !empty(trim($_POST["numero"]))) {

        $numero = intval($_POST["numero"]);


        if ($numero >= 0) {
            $fatorial = 1;


            for ($i = 1; $i <= $numero; $i++) {
                //criei uma variavel $i (contador), enquanto o i for menor ou igual a o número, vai aumentando o i de um em um.
                $fatorial *= $i;
            }
            $mensagem = "O fatorial de $numero é: $fatorial";
        } else {
            $mensagem = "Por favor, insira um número inteiro positivo.";
        }

    } else {
        $mensagem = "Por favor, preencha o campo número.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fatorial</title>
</head>

<body>

    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero"
            value="<?= isset($_POST["numero"]) ? htmlspecialchars($_POST["numero"]) : '' ?>">

        <button type="submit">Calcular</button>
    </form>

    <div class="resultado">
        <h1>Resultado</h1>
        <p><?= $mensagem ?></p>
    </div>

</body>

</html>