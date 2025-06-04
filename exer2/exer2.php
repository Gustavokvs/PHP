<?php
$mensagem = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["numero"]) && !empty(trim($_POST["numero"])) && isset($_POST["numero2"]) && !empty(trim($_POST["numero2"]))) {
        $numero = intval($_POST["numero"]);
        $numero2 = intval($_POST["numero2"]);
        $resultado = $numero + $numero2;
        $mensagem = "Os números somados dão: $resultado";


    } else {
        $mensagem = "Por favor, preencha os campos números.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <label for="numero">Digite dois números:</label>
        <input type="number" name="numero" id="numero"
            value="<?= isset($_POST["numero"]) ? htmlspecialchars($_POST["numero"]) : '' ?>">

        <input type="number" name="numero2" id="numero2"
            value="<?= isset($_POST["numero2"]) ? htmlspecialchars($_POST["numero2"]) : '' ?>">
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