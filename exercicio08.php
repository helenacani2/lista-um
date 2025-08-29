<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Números pares</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero1">Digite um número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <br>

        <button type="submit" name="pares">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['pares'])) {
            $numero1 = $_POST['numero1'];

            $contador = 0;

            for ($i = 0; $i < $numero1; $i++) {
                if ($numero1 % 2 == 0) {
                    $contador += 1;
                }
                $numero1--;
            }

            echo "O número tem <strong>$contador pares</strong> <br>";
        }
    }
    ?>
</body>

</html>