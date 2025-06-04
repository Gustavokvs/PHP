<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["valor"]) && !empty(trim($_POST["valor"])) &&
        isset($_POST["parcelas"]) && !empty(trim($_POST["parcelas"])) &&
        isset($_POST["juros"]) && !empty(trim($_POST["juros"]))
    ) {
        $valor = floatval($_POST["valor"]);
        $parcelas = intval($_POST["parcelas"]);
        $juros = floatval($_POST["juros"]);

        $montante = $valor * (1 + ($juros / 100) * $parcelas);
        $valorParcela = $montante / $parcelas;

        $mensagem = "Valor total a pagar: R$ " . number_format($montante, 2, ',', '.') . "<br>";
        $mensagem .= "Parcelas: $parcelas de R$ " . number_format($valorParcela, 2, ',', '.');
    } else {
        $mensagem = "Por favor, preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Simulador de Empréstimo</title>
</head>

<body>
    <h1>Simulador de Empréstimo</h1>
    <form method="post">
        <label for="valor">Valor do Empréstimo:</label>
        <input type="number" name="valor" id="valor"
            value="<?= isset($_POST["valor"]) ? htmlspecialchars($_POST["valor"]) : '' ?>">

        <br><br>

        <label for="parcelas">Número de Parcelas:</label>
        <input type="number" name="parcelas" id="parcelas"
            value="<?= isset($_POST["parcelas"]) ? htmlspecialchars($_POST["parcelas"]) : '' ?>">

        <br><br>

        <label for="juros">Juros ao mês (%):</label>
        <input type="number" name="juros" id="juros"
            value="<?= isset($_POST["juros"]) ? htmlspecialchars($_POST["juros"]) : '' ?>">

        <br><br>

        <button type="submit">Simular</button>
    </form>

    <div>
        <h2>Resultado</h2>
        <p><?= $mensagem ?></p>
         <br><br>
        <button type="button" onclick="window.location.href='http://localhost/ProjetoNoite/'">Voltar</button>
    </div>
</body>

</html>
