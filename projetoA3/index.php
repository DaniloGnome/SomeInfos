<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Olá <?php echo $_SESSION['nome_usuario']; ?>, seja bem-vindo(a).</h1>
        <div class="button-container">
            <a class="button" href="cadastro.php">Cadastrar novo usuário</a>
        </div>
        <div class="button-container">
            <a class="button" href="mudarsenha.php">Alterar senha</a>
        </div>
        <div class="button-container">
            <a class="button" href="registro.php">Lista de usuários</a>
        </div>
        <div class="button-container">
            <a class="button" href="sair.php">Sair</a>
        </div>
    </div>
</body>
</html>
