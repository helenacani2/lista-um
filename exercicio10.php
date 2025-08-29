<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Fibonacci </title>
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
            $numero1 = $_POST['numero1'];

            $fibonacci = [0, 1];
            $quantidade = 0;

            for ($i = 1; $i < $numero1; $i++) {
                array_push($fibonacci, $fibonacci[$i] + $fibonacci[$i - 1]); //põe mais itens no final array
                //é em $fibonacci que vai ser adicionado, e o que vai ser adicionado é o RESULTADO DA SOMA - $fibonacci[$i] + $fibonacci[$i - 1]
                //ele pega o número atual da sequência ($fibonacci[$i]) e o número anterior ($fibonacci[$i - 1]), soma os dois e, em seguida, adiciona o resultado ao final do array $fibonacci.
            }

            $quantidade = count($fibonacci); //conta quantos itens tem no array

            for ($i = 0; $i < $quantidade; $i++) { //vai parar no tanto que ele contar
                echo "$fibonacci[$i] <br>"; //se eu inserir 8, vai mostrar 8 dígitos da sequência de fibonacci aqui
            }
            }
        }
    ?>
</body>
</html>