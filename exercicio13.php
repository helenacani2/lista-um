<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 - Célcius para Fahrenheit</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite uma temperatura EM CELSIUS!:</label>
        <input type="number" id="numero" name="numero" required>

        <br>
        
        <button type="submit" name="celsius">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['celsius'])) {
            $celsius = $_POST['numero'];
            $fahrenheit = 0;

            ($fahrenheit = ($celsius*1.8)+32);
            }

            echo "$celsius graus Celsius equivalem a $fahrenheit graus fahrenheit! <br>";
            echo "Esses americanos amam inventar moda";
        }
    ?>
</body>
</html>