<?php

include('conexao.php');

/// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $novaSenha = $_POST['nova_senha'];

    // Consulta SQL para verificar se o usuário existe
    $sql = "SELECT * FROM login WHERE login = '$login' AND nome = '$nome'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // O usuário existe, então atualiza a senha
        $sql = "UPDATE login SET senha = '$novaSenha' WHERE login = '$login' AND nome = '$nome'";
        if ($conexao->query($sql) === TRUE) {
            echo "Senha alterada com sucesso.";
        } else {
            echo "Erro ao alterar a senha: " . $conexao->error;
        }
    } else {
        echo "Usuário não encontrado.";
    }
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Senha</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Alterar Senha</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required><br><br>
    
                <label for="login">Login:</label>
                <input type="text" name="login" required><br><br>
    
                <label for="nova_senha">Nova Senha:</label>
                <input type="password" name="nova_senha" required><br><br>
    
                <input type="submit" value="Alterar Senha" class="button"><br><br>
                <a class="button" href="index.php">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>


