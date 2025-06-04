<?php

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["senha"]) && !empty($_POST["senha"])) {
        $senha = $_POST["senha"];

        if (strlen($senha) >= 8) {
            $mensagem = "Senha válida.";
        } else {
            $mensagem = "A senha deve ter pelo menos 8 caracteres.";
        }
    } else {
        $mensagem = "Digite a senha.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Validação de Senha</title>
</head>

<body>

    <form method="post">
        <label for="senha">Digite sua senha:</label>
        <input type="text" name="senha" id="senha">
        <button type="submit">Verificar</button>
    </form>

    <p><?= $mensagem ?></p>

</body>

</html>