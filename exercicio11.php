<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Palíndromo</title>
</head>
<body>
    <form method="POST" action="">
        <label for="texto">Digite uma palavra:</label>
        <input type="text" id="texto" name="texto" required>

        <br>
        
        <button type="submit" name="palindromo">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['palindromo'])) {
            $texto = $_POST['texto'];

            $texto_invertido = strrev($texto);

                if ($texto == $texto_invertido) {
                    echo "$texto <strong>é um palíndromo!</strong> <br>";

                } else {
                    echo "$texto <strong>NÃO é um palíndromo!</strong> <br>";;
                }
            }
        }
    ?>
</body>
</html>