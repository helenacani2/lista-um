<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17 - Verificar data</title>
</head>
<body>
    <form method="POST" action="">
        <label for="dia">Digite um dia:</label>
        <input type="number" id="dia" name="dia" required>

        <br>

        <label for="mes">Digite um mês:</label>
        <input type="number" id="mes" name="mes" required>

        <br>

        <label for="ano">Digite um ano:</label>
        <input type="number" id="ano" name="ano" required>

        <br>
        
        <button type="submit" name="data">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['data'])) {
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];
            
                if (checkdate($mes, $dia, $ano)) {
                    echo "A data é <strong>válida!!</strong>";
                } else {
                    echo "A data é <strong>inválida!!</strong>";
                }
            }
        }
    ?>
</body>
</html>