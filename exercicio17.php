<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17 - Verificar data </title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Digite um número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <br>
        
        <button type="submit" name="fibonacci">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['fibonacci'])) {
            
            echo "socorro não consegui";
            }
        }
    ?>
</body>
</html>