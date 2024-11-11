<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['cpf'])) {
    header('Location: login.php');  // Redireciona se não estiver logado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <header>
        <h1>Cadastro de Funcionário</h1>
        <a href="logout.php">Sair</a>
    </header>

    <main>
        <section>
            <h2>Preencha os dados do funcionário</h2>
            <form action="processar_cadastro_funcionario.php" method="POST">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
                
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <label for="permissao">Permissão:</label>
                <select id="permissao" name="permissao" required>
                    <option value="A">Administrador</option>
                    <option value="F">Funcionário</option>
                </select>

                <label for="salario_220h">Salário (220h):</label>
                <input type="number" step="0.01" id="salario_220h" name="salario_220h" required>

                <label for="horas_trabalhadas">Horas Trabalhadas:</label>
                <input type="number" id="horas_trabalhadas" name="horas_trabalhadas" required>

                <button type="submit">Cadastrar</button>
            </form>
            <a href="dashboard.php" class="btn-voltar">Voltar ao Painel</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Mercado</p>
    </footer>
</body>
</html>
