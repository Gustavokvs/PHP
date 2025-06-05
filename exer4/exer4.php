<?php

$mensagem = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["celcius"]) && !empty(trim($_POST["celcius"]))
    ) {

        $celcius = intval($_POST["celcius"]);
        $celciusPFar = 9 / 5 * $celcius + 32;

        $mensagem = "$celcius graus celcius, equivalem a $celciusPFar fahrenheit";
    } else {
        $mensagem = "Por favor, preencha o campo.";
    }
}




?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
</head>

<body>

    <form method="post">
        <label for="celcius">Digite a temperatura em celcius.:</label>
        <input type="number" name="celcius" id="celcius"
            value="<?= isset($_POST["celcius"]) ? htmlspecialchars($_POST["celcius"]) : '' ?>">


        <button type="submit">Calcular</button>
    </form>

    <div class="resultado">
        <h1>Resultado</h1>
        <p><?= $mensagem ?></p>
         <br><br>
        <button type="button" onclick="window.location.href='http://localhost/ProjetoNoite/'">Voltar</button>
    </div>


</body>

</html>