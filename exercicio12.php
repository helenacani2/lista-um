<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 - Vogais </title>
</head>
<body>
    <form method="POST" action="">
        <label for="texto">Digite uma palavra:</label>
        <input type="text" id="texto" name="texto" required>

        <br>
        
        <button type="submit" name="vogais">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['vogais'])) {
            $texto = $_POST['texto'];
            $contador = 0;

            if (preg_match_all("/[aeiouAEIOU]/", $texto, $matches)) {
            $contador = count($matches[0]);
            }
            }

            echo "O texto '$texto' tem $contador vogais!!! yippiee";

        }
    ?>
</body>
</html>