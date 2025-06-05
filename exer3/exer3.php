<?php
$mensagem = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["nota1"]) && !empty(trim($_POST["nota1"])) &&
        isset($_POST["nota2"]) && !empty(trim($_POST["nota2"])) &&
        isset($_POST["nota3"]) && !empty(trim($_POST["nota3"]))
    ) {


        $nota1 = intval($_POST["nota1"]);
        $nota2 = intval($_POST["nota2"]);
        $nota3 = intval($_POST["nota3"]);
        $soma = $nota1 + $nota2 + $nota3;
        $media = $soma / 3;

        if ($media >= 7) {
            $mensagem = "Aprovado com média: $media";


        } else {
            $mensagem = "Reprovado com média $media";
        }
    }
}



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>

<body>

    <form method="post">
        <label for="nota1">Digite as notas do aluno.:</label>
        <input type="number" name="nota1" id="nota1"
            value="<?= isset($_POST["nota1"]) ? htmlspecialchars($_POST["nota1"]) : '' ?>">

        <input type="number" name="nota2" id="nota2"
            value="<?= isset($_POST["nota2"]) ? htmlspecialchars($_POST["nota2"]) : '' ?>">

        <input type="number" name="nota3" id="nota3"
            value="<?= isset($_POST["nota3"]) ? htmlspecialchars($_POST["nota3"]) : '' ?>">
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