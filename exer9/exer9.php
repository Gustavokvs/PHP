<?php

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["ano"]) && !empty(trim($_POST["ano"]))) {

        $ano = intval($_POST["ano"]);

        if ($ano > 0) {
            $ano = intval($_POST["ano"]);
            $idade = date(('Y')) - $ano;
            $mensagem = "Você tem $idade, ou proximo disto.";
        } else {
            $mensagem = "digite um ano válido por favor.";
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
    <title>Idade</title>
</head>

<body>

    <form method="post">
        <label for="ano">Digite seu ano de nascimento:</label>
        <input type="number" name="ano" id="ano"
            value="<?= isset($_POST["ano"]) ? htmlspecialchars($_POST["ano"]) : '' ?>">

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