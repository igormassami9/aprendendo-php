<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
        $numero = $_GET["numero"];
        $antecessor = $numero -1;
        $sucessor = $numero +1;

        echo "<p>O número escolhido foi <strong>$numero</strong>";
        echo "<p>O seu <i>antecessor</i> é <strong>$antecessor</strong><p>";
        echo "<p>O seu <i>sucessor</i> é <strong>$sucessor</strong><p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">← Voltar</button>
    </main>
</body>
</html>