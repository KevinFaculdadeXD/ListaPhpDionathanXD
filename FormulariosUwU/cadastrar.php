<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <style>
        .cartao {
            border: 2px solid #333;
            border-radius: 8px;
            padding: 20px;
            width: 320px;
            background-color: #f9f9f9;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }
        .cartao h3 { margin-top: 0; color: #2c3e50; }
    </style>
</head>
<body>
    <h2>Formulário de Cadastro</h2>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="telefone" placeholder="Telefone" required><br><br>
        <label>Data de Nascimento:</label><br>
        <input type="date" name="nascimento" required><br><br>
        <input type="text" name="cidade" placeholder="Cidade" required><br><br>
        <input type="text" name="estado" placeholder="Estado (UF)" maxlength="2" required><br><br>
        
        <label>Sexo:</label>
        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select><br><br>

        <input type="text" name="curso" placeholder="Curso" required><br><br>
        <textarea name="obs" placeholder="Observações"></textarea><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $telefone = htmlspecialchars($_POST['telefone']);
        $nascimento = date("d/m/Y", strtotime($_POST['nascimento']));
        $cidade = htmlspecialchars($_POST['cidade']);
        $estado = strtoupper(htmlspecialchars($_POST['estado']));
        $sexo = htmlspecialchars($_POST['sexo']);
        $curso = htmlspecialchars($_POST['curso']);
        $obs = htmlspecialchars($_POST['obs']);

        echo "
        <div class='cartao'>
            <h3>🪪 Cartão de Cadastro</h3>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $telefone</p>
            <p><strong>Nascimento:</strong> $nascimento</p>
            <p><strong>Local:</strong> $cidade - $estado</p>
            <p><strong>Sexo:</strong> $sexo</p>
            <p><strong>Curso:</strong> $curso</p>
            <p><strong>Obs:</strong> " . ($obs ? $obs : "Nenhuma") . "</p>
        </div>";
    }
    ?>
</body>
</html>