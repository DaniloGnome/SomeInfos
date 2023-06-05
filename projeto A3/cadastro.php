<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form id= "cadastro" action= "cadastrar.php" method="POST">
           Nome completo: <input type="text" name="nome" required><br>
           Login: <input type="text" name="login" required><br>
           Senha: <input type="password" name="senha" required><br><br>
           <input type="submit" name="cadastrar" value="Cadastrar"><br>
           <a href="index.php">Voltar</a>
        </form>
    </center>
</body>
</html>