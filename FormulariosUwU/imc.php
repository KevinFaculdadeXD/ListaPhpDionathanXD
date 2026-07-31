<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Cálculo de IMC</h2>
    <form method="POST">
        <label>Peso (kg):</label><br>
        <input type="number" step="0.1" name="peso" required><br><br>
        
        <label>Altura (m):</label><br>
        <input type="number" step="0.01" name="altura" required><br><br>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $peso = (float) $_POST['peso'];
        $altura = (float) $_POST['altura'];

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<h3>Seu IMC é: " . number_format($imc, 2, ',', '.') . "</h3>";
        }
    }
    ?>
</body>
</html>