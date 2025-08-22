<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Números amigos</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <br>
        
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        
        <button type="submit" name="amigos">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['amigos'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            $divisor1 = [];
            
                for ($i = 1; $i < $numero1; $i++) {
                    if ($numero1 % $i == 0) {
                        $divisor1[] = $i;
                    }
                }

            $soma1 = array_sum($divisor1);

            $divisor2 = [];
            
                for ($i = 1; $i < $numero2; $i++) {
                    if ($numero2 % $i == 0) {
                        $divisor2[] = $i;
                    }
                }
            $soma2 = array_sum($divisor2);
        }

        if ($numero1 == $soma2 and $numero2 == $soma1){
            echo "Os números são amigos! <br>";
        } else {
            echo "Os números não são amigos! <br>";
        }

    }
    ?>
</body>
</html>