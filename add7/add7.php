<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["frase"]) && $_POST["frase"] !== '') {
        $frase = strval($_POST["frase"]);

        $mensagem = ucwords(strtolower($frase));

    } else {
        $mensagem = "Por favor, uma frase.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>Frases minúsculas</title>
</head>

<body>

    <form method="post">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase" id="frase"
            value="<?= isset($_POST["frase"]) ? htmlspecialchars($_POST["frase"]) : '' ?>">

        <button type="submit">Construir frase.</button>
    </form>

    <div class="resultado">
        <h1>Resultado</h1>
        <p><?= $mensagem ?></p>
        <br><br>
        <button type="button" onclick="window.location.href='http://localhost/ProjetoNoite/'">Voltar</button>
    </div>

</body>

</html>