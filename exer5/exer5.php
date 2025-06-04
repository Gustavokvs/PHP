<?php
$mensagem = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["peso"]) && !empty(trim($_POST["peso"]))
        && isset($_POST["altura"]) && !empty(trim($_POST["altura"]))
    ) {

        $peso = intval($_POST["peso"]);
        $altura = floatval($_POST["altura"]);


        $imc = $peso / pow($altura, 2);

        $mensagem = "Seu imc é: $imc";
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
    <title>Document</title>
</head>

<body>

    <form method="post">
        <label for="peso">Digite seu peso.:</label>
        <input type="number" name="peso" id="peso"
            value="<?= isset($_POST["peso"]) ? htmlspecialchars($_POST["peso"]) : '' ?>">

        <input type="double" name="altura" id="altura"
            value="<?= isset($_POST["altura"]) ? htmlspecialchars($_POST["altura"]) : '' ?>">


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