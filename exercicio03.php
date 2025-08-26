<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 -  Informar se um número é positivo, negativo ou zero</title>
</head>
<body>
    <form method="POST" action=""> <!--post ENVIA dados, get BUSCA dados-->
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="sinal">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['sinal'])){
            $numero = $_POST['numero'];

            if ($numero == 0){
                echo "O número informado é <strong>0</strong>.";
            } 
            else if ($numero < 0){
                echo "O número $numero é <strong>negativo</strong>."; 
            }  
            else if ($numero > 0){
                echo "O número $numero é <strong>positivo</strong>.";
                }
            }
        }
    ?>
</body>
</html>