<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["numero"]) && !empty(trim($_POST["numero"]))) {
        $numero = intval($_POST["numero"]);
        $calculo = $numero % 2;
        $resultado = '';

        if ($calculo != 0) {
            $resultado = "Impar";

            $mensagem = "O $numero é $resultado.";

        } else {
            $resultado = "Par";
            $mensagem = "O $numero é $resultado";
        }
        ;

    } else {
        $mensagem = "Por favor, preencha o campo número.";
    }
}
?>  

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Impar ou par</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16pt;
            margin: 1em;
        }

        .resultado {
            margin-top: 1em;
            padding: 1em;
            background-color: rgb(241, 241, 241);
            border-radius: 5px;
        }

        h1 {
            font-size: 2em;
        }
    </style>
</head>

<body>
    <h1>CALCULADORA DO resultado</h1>
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