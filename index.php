
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login de Clientes</title>
</head>
<body>

    <h1>Sistema de Clientes</h1>
    <h2>Faça seu login</h2>

    <form action="login.php" method="POST">

        <label>CPF:</label><br>
        <input type="text" name="cpf" maxlength="11" required>
        <br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required>
        <br><br>

        <button type="submit">Entrar</button>

    </form>

</body>
</html>
