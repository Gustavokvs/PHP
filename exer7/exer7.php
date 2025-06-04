<?php

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["numero"]) && !empty(trim($_POST["numero"]))) {

        $numero = intval($_POST["numero"]);

        if ($numero > 0) {
            $mensagem = "Os 10 primeiros múltiplos de $numero são:<br>";

            for ($i = 1; $i <= 10; $i++) {
                /* criei um contador que começa em um
                enquanto esse contador for menor do que dez, ele vai continuar aumentando */
                $multiplo = $numero * $i;

                /* o múltiplo tá fazendo o número escolhido e fazendo x o contador, consequentemente
                fazendo aparecer só os 10 primeiros números*/
                
                $mensagem .= "$multiplo <br>";
            }
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
    <title>Exibir Múltiplos</title>
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