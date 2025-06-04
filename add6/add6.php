<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["palavra"]) && $_POST["palavra"] !== '') {
        $palavra = strval($_POST["palavra"]);

        $mensagem = str_ireplace(search: "merda", replace: "***", subject: $palavra);

    } else {
        $mensagem = "Por favor, uma palavra.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>Censurador de palavras</title>
</head>

<body>

    <form method="post">
        <label for="palavra">Digite uma frase:</label>
        <input type="text" name="palavra" id="palavra"
            value="<?= isset($_POST["palavra"]) ? htmlspecialchars($_POST["palavra"]) : '' ?>">

        <button type="submit">Censurar palavra.</button>
    </form>

    <div class="resultado">
        <h1>Resultado</h1>
        <p><?= $mensagem ?></p>
    </div>

</body>

</html>