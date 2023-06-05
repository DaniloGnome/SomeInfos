<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center>
        <h1>Olá <?php echo $_SESSION['nome_usuario']; ?> seja bem vindo.</h1>
        <a href="cadastro.php">Cadastrar</a><br>
        <a href="sair.php">Sair</a>
    </center>
</body>
</html>