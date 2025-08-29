<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14 - Ano bissexto</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um ano:</label>
        <input type="number" id="numero" name="numero" required>

        <br>
        
        <button type="submit" name="bissexto">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['bissexto'])) {
            $ano = $_POST['numero'];

            if ($ano % 4 == 0 and $ano % 100 != 0 or $ano % 400 == 0){
            echo "O ano $ano é bissexto <br>";   
            } else {
            echo "O ano $ano <strong>NÃO é bissexto</strong> <br>";
            }
        }
    }
    ?>
</body>
</html>