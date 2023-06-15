<?php
include ('conexao.php');


$nome= isset($_POST['nome']) ? $_POST['nome'] : '';
$login= isset($_POST['login']) ? $_POST['login'] : '';
$senha= isset($_POST['senha']) ? $_POST['senha'] : '';



$insert = "INSERT INTO login (nome, login, senha)
            VALUES ('$nome', '$login', '$senha')";
$query= mysqli_query($conexao, $insert);

echo "O usario foi cadastrado com sucesso";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <center>
            <a href= "index.php">Voltar</a>
        </center>
    </body>
</html>