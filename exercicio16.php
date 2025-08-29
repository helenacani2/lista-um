<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16 - Voto</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Digite sua idade:</label>
        <input type="number" id="numero1" name="numero1" required>

        <br>

        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <button type="submit" name="voto">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['voto'])) {

            $idade = $_POST['numero1'];
            $nome = $_POST['nome'];

            if ($idade >= 18){
                echo "Você é obrigado a votar, $nome <br>";
            } else if ($idade >= 16 and $idade <= 18) {
                echo "Você pode votar SE tirou o título, $nome <br>";
            } else {
                echo "Você não pode votar ainda, $nome <br>";
            }
    }
}
    ?>
</body>
</html>