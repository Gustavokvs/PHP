<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["catetoA"]) && !empty(trim($_POST["catetoA"])) &&
        isset($_POST["catetoB"]) && !empty(trim($_POST["catetoB"]))
    ) {
        $catetoA = floatval($_POST["catetoA"]);
        $catetoB = floatval($_POST["catetoB"]);

        $hipotenusa = sqrt(pow($catetoA, 2) + pow($catetoB, 2));

        $mensagem = "A hipotenusa é: " . number_format($hipotenusa, 2, ",", ".");
    } else {
        $mensagem = "Por favor, preencha os dois catetos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>Calculadora de Hipotenusa</title>
</head>

<body>

    <form method="post">
        <label for="catetoA">Cateto A:</label>
        <input type="number" name="catetoA" id="catetoA"
            value="<?= isset($_POST["catetoA"]) ? htmlspecialchars($_POST["catetoA"]) : '' ?>">

        <label for="catetoB">Cateto B:</label>
        <input type="number" name="catetoB" id="catetoB"
            value="<?= isset($_POST["catetoB"]) ? htmlspecialchars($_POST["catetoB"]) : '' ?>">

        <button type="submit">Calcular</button>
    </form>

    <div class="resultado">
        <h1>Resultado</h1>
        <p><?= $mensagem ?></p>
    </div>

</body>

</html>
