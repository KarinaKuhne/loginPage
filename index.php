<?php
    include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="h2">
        <h2>Login</h2>
        </div>
        <form action="login.php" method="POST">
            <label>E-mail </label><input type="text" name="email">
            <label>Senha </label><input type="password" name="senha">
            <input type="submit" value="Entrar" name="submit" id="botao">                       
        </form>
        <hr>
            <p>Registre-se abaixo</p>
            <input type="button" value="Registrar" id="botao">

    </div>
</body>
</html>