<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Sorteado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Números Aleatórios</h1>
        <?php
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);
        echo "<p>Gerando um número aleatorio entre $min e $max... <br> 0 valor gerado foi <strong>$num</strong>"
        /* $n = rand(0, 100);
        echo "O numero aleatório gerado foi: $n";
        */
        ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1f504; Gerar OutroS</button>
    </main>
</body>

</html>