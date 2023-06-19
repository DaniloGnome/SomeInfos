<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto A3</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form id="form-login" action="logado.php" method="POST">
			<div class="form-group">
				<label for="login">Login:</label>
				<input type="text" name="login" id="login" required>
			</div>
			<div class="form-group">
				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha" required>
			</div>
			<input type="submit" name="entrar" value="Entrar" class="button-login">
		</form>
	</div>
</body>
</html>
