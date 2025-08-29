<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18 - Número maior</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <br>
        
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>

        <br>

        <label for="numero3">Digite o terceiro número:</label>
        <input type="number" id="numero3" name="numero3" required>
        
        <button type="submit" name="maior_3">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['maior_3'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $numero3 = $_POST['numero3'];

            if ($numero1 > $numero2 and $numero1 > $numero3) {
                echo "O primeiro número é maior!";
            } else if ($numero2 > $numero1 and $numero2 > $numero3) {
                echo "O segundo número é maior!";
            } else if ($numero3 > $numero1 and $numero3 > $numero2) {
                echo "O terceiro número é maior!";
            } else if ($numero1 = $numero2 or $numero1 = $numero3) {
                echo "Todos são iguais!"; //
            }
        }
    }
    ?>
</body>
</html>