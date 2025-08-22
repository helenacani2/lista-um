<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Fatorial</title>
</head>
<body>
    <form method="POST" action=""> <!--post ENVIA dados, get BUSCA dados-->
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="fatorial">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['fatorial'])){
            $numero = $_POST['numero'];
            $array = [];

            for ($i = 1; $i <= $numero; $i++) {
                
                $resultado = $i * $numero;

                echo "$i * $numero = $resultado <br>";
                

            }
        }

    }

    ?>
</body>
</html>