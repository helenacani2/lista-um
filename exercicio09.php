<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Números pares entre </title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <br>
        
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        
        <button type="submit" name="pares_entre">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['pares_entre'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            $entre = [];
            $entre_numeros = 0;
            $soma = 0;
            
                if ($numero1 > $numero2) {
                    for ($i = $numero2 + 1; $i < $numero1; $i++) {
                    $entre[] = $i;
                    }
                } else {
                    for ($i = $numero1 + 1; $i < $numero2; $i++) {
                    $entre[] = $i;
                }
                }

                $soma = array_sum($entre);

        echo "Os números entre $numero1 e $numero2 são: <br>";
        foreach ($entre as $entre_numeros) {
        echo $entre_numeros . "<br>"; 
        }

        echo "E a soma deles são: ";
        echo "$soma";
    
    }
    }
    ?>
</body>
</html>