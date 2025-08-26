<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Divisores</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Digite um número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <br>
        
        <button type="submit" name="divisores">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['divisores'])) {
            $numero1 = $_POST['numero1'];

            $divisor1 = [];
            $divisor = 0;
            
                for ($i = 1; $i < $numero1; $i++) {
                    if ($numero1 % $i == 0) {
                        $divisor1[] = $i;
                    }
                }

            $soma1 = array_sum($divisor1);

        }

        echo "Os divisores de $numero1 são: <br>";
        foreach ($divisor1 as $divisor) {
        echo $divisor . "<br>"; 
}
    
    }
    ?>
</body>
</html>