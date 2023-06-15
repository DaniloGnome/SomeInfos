<!DOCTYPE html>
<html>
<head>
    <title>Lista de cadastros no database</title>
</head>
<body>
    <center>
    <h1>Lista de Cadastros no database</h1>

    <?php
    include('conexao.php');

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Consulta os cadastros na tabela "login"
    $sql = "SELECT * FROM login";
    $resultado = $conexao->query($sql);

    // Verifica se há registros retornados pela consulta
    if ($resultado->num_rows > 0) {
        // Exibe os dados de cada registro
        while ($row = $resultado->fetch_assoc()) {
            echo "Nome: " . $row["nome"] . "<br>";
            echo "Login: " . $row["login"] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Nenhum cadastro encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
    ?>
    <a href="index.php">Voltar</a>
</center>
</body>
</html>