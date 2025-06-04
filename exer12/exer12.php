<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["numero"]) && !empty(trim($_POST["numero"]))) {
        $numero = intval($_POST["numero"]);
        $dobro = $numero * 2;
        $mensagem = "O dobro de $numero é $dobro.";
    } else {
        $mensagem = "Por favor, preencha o campo número.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="./styles/style.css">
    <meta charset="UTF-8">
    <title>Exemplo com PHP</title>

</head>

<body>
    <h1>CALCULADORA DO DOBRO</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero"
            value="<?= isset($_POST["numero"]) ? htmlspecialchars($_POST["numero"]) : '' ?>">
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