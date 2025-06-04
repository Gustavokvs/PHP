<?php
$mensagem = "";
$iniciais = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["frase"]) && $_POST["frase"] !== '') {
        $frase = strval($_POST["frase"]);


        $mensagem = explode(" ", $frase);
        /* O explode vai cortar a frase no ponto definido, (aqui é tudo q tiver espaço em branco/espaço)
        ai a gente fala de onde ele vai cortar ($frase)*/

        foreach ($mensagem as $mensagens) {
            $iniciais .= substr($mensagens, 0, 1);

            /* o foreach é um looping para arrays, como mensagem virou um array se aplica nela.
            o $iniciais, está sendo um "acumulador" por conta do .= (mesma coisa q eu fizesse $iniciais = iniciais.etcetc) 
            Ele tá fazendo com o substr é o seguinte, QUANDO ELE PERCORRER CADA CAIXA DO ARRAY ($mensagens), ELE VAI PEGAR 
            O PRIMEIRO ELEMENTO (length:1) QUE NO CASO É A PRIMEIRA LETRA.
            */
        }
        $iniciais = strtoupper($iniciais);
        /* Aqui ele já está fora do loop, e faz o seguinte, com a primeira letra de cada palavra, ele as transforma em maiúsculas. */

    } else {
        $mensagem = "Por favor, DIGITEuma frase.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>Acrônicos</title>
</head>

<body>

    <form method="post">
        <label for="frase">Digite uma frase:</label>
        <input type="text" name="frase" id="frase"
            value="<?= isset($_POST["frase"]) ? htmlspecialchars($_POST["frase"]) : '' ?>">

        <button type="submit">Construir acrônico.</button>
    </form>

    <div class="resultado">
        <h1>Resultado</h1>
        <p><?= $iniciais ?></p>
        <br><br>
        <button type="button" onclick="window.location.href='http://localhost/ProjetoNoite/'">Voltar</button>

    </div>

</body>

</html>