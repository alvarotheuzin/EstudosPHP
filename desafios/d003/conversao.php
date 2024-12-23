<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Coversor de Moeda</h1>
        <?php 
            $cotacao = 6.19;
            $real = $_GET["din"] ?? 0;
            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "<strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>