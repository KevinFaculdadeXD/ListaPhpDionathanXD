<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="POST">
        <input type="number" step="any" name="num1" placeholder="Número 1" required>
        <input type="number" step="any" name="num2" placeholder="Número 2" required><br><br>

        <button type="submit" name="operacao" value="somar">Somar</button>
        <button type="submit" name="operacao" value="subtrair">Subtrair</button>
        <button type="submit" name="operacao" value="multiplicar">Multiplicar</button>
        <button type="submit" name="operacao" value="dividir">Dividir</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n1 = (float) $_POST['num1'];
        $n2 = (float) $_POST['num2'];
        $op = $_POST['operacao'];
        $resultado = 0;

        switch ($op) {
            case 'somar':
                $resultado = $n1 + $n2;
                break;
            case 'subtrair':
                $resultado = $n1 - $n2;
                break;
            case 'multiplicar':
                $resultado = $n1 * $n2;
                break;
            case 'dividir':
                $resultado = ($n2 != 0) ? $n1 / $n2 : "Erro: Divisão por zero";
                break;
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>