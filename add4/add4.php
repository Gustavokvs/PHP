<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nota"]) && $_POST["nota"] !== '') {
        $nota = floatval($_POST["nota"]);

        $round = round($nota);
        $ceil = ceil($nota);
        $floor = floor($nota);

        $mensagem = "Nota original: $nota<br>";
        $mensagem .= "Arredondada para o inteiro mais próximo (round): $round<br>";
        $mensagem .= "Arredondada sempre para cima (ceil): $ceil<br>";
        $mensagem .= "Arredondada sempre para baixo (floor): $floor";
    } else {
        $mensagem = "Por favor, digite uma nota.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>Arredondador de Notas</title>
</head>

<body>

    <form method="post">
        <label for="nota">Digite a nota:</label>
        <input type="number" name="nota" id="nota"
            value="<?= isset($_POST["nota"]) ? htmlspecialchars($_POST["nota"]) : '' ?>">

        <button type="submit">Arredondar</button>
    </form>

    <div class="resultado">
        <h1>Resultado</h1>
        <p><?= $mensagem ?></p>
        <br><br>
        <button type="button" onclick="window.location.href='http://localhost/ProjetoNoite/'">Voltar</button>
    </div>

</body>

</html>