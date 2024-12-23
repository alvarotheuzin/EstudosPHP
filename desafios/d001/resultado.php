<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio PHP</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["num"] ?? 0;
        $antecessor = $n - 1;
        $sucessor = $n + 1;
        echo "</br>O Número escolhido foi: $n";
        echo "</br>O valor antecessor: $antecessor";
        echo "</br>O valor sucessor: $sucessor";
        ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
    
</body>
</html>
