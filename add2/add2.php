<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["preco"]) && !empty(trim($_POST["preco"]))) {

        $preco = floatval($_POST["preco"]);

        $percentual = rand(5, 25);
        $desconto = ($percentual / 100) * $preco;
        $precoFinal = $preco - $desconto;

        $mensagem = "Preço original: R$ " . number_format($preco, 2, ",", ".") . "<br>" .
            "Desconto sorteado: $percentual%<br>" .
            "Preço com desconto: R$ " . number_format($precoFinal, 2, ",", ".");
    } else {
        $mensagem = "Por favor, informe o preço do produto.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Desconto</title>
</head>

<body>

    <form method="post">
        <label for="preco">Digite o preço do produto:</label>
        <input type="number" name="preco" id="preco"
            value="<?= isset($_POST["preco"]) ? htmlspecialchars($_POST["preco"]) : '' ?>">

        <button type="submit">Sortear Desconto</button>
    </form>

    <div class="resultado">
        <h1>Resultado</h1>
        <p><?= $mensagem ?></p>
         <br><br>
        <button type="button" onclick="window.location.href='http://localhost/ProjetoNoite/'">Voltar</button>
    </div>

</body>

</html>