<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristrar</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
        <form id="cadastro" action="cadastrar.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome completo:</label>
                <input type="text" name="nome" id="nome" required><br>
                <label for="login">Login:</label>
                <input type="text" name="login" id="login" required><br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required><br><br>
                <input type="submit" name="cadastrar" value="Cadastrar" class="button"><br><br>
                <a class="button" href="index.php">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>

