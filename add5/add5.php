<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nome"]) && $_POST["nome"] !== '') {
        $nome = strval($_POST["nome"]);

        $mensagem = str_replace(search: " ", replace: ".", subject: strtolower(trim(string: $nome)));

    } else {
        $mensagem = "Por favor, digite seu nome.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>Gerador de nomes</title>
</head>

<body>

    <form method="post">
        <label for="nome">Digite um nome:</label>
        <input type="text" name="nome" id="nome"
            value="<?= isset($_POST["nome"]) ? htmlspecialchars($_POST["nome"]) : '' ?>">

        <button type="submit">Criar nome de usuário.</button>
    </form>

    <div class="resultado">
        <h1>Resultado</h1>
        <p><?= $mensagem ?></p>
         <br><br>
        <button type="button" onclick="window.location.href='http://localhost/ProjetoNoite/'">Voltar</button>
    </div>

</body>

</html>