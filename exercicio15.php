<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15 - IMC </title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Digite seu peso em kilogramas:</label>
        <input type="number" id="numero1" name="numero1" required>

        <br>

        <label for="numero2">Digite sua altura em metros:</label>
        <input type="number" id="numero2" name="numero2" required>
        
        <button type="submit" name="imc">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['imc'])) {

            $peso = $_POST['numero1'];
            $altura = $_POST['numero2'];
            $resultado = 0;

            $resultado = (($peso)/($altura*$altura));

            if ($resultado < 18.5){
                echo "Você está <strong>ABAIXO</strong> do peso! <br>";
            } else if ($resultado > 18.5 and $resultado < 25) {
                echo "Você está com peso <strong>NORMAL</strong>! <br>";
            } else if ($resultado > 25 and $resultado < 30) {
                echo "Você está com <strong>SOBREPESO</strong>! <br>";
            } else if ($resultado > 30 and $resultado < 35) {
                echo "Você está com <strong>OBESIDADE GRAU I</strong>! <br>";
            } else if ($resultado > 35 and $resultado < 40) {
                echo "Você está com <strong>OBESIDADE GRAU II</strong>! <br>";
            } else if ($resultado > 40) {
                echo "Você está com <strong>OBESIDADE GRAU III</strong>! <br>";
            }
    }
}
    ?>
</body>
</html>