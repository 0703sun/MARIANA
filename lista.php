
<?php
session_start();

if (!isset($_SESSION["cliente"])) {
    header("Location: index.php");
    exit();
}

require_once "conecta.php";

$sql = "SELECT id, nome, cpf FROM cliente ORDER BY id";

$consulta = $conexao->prepare($sql);
$consulta->execute();

$ = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de clientes</title>
</head>
<body>

    <h1>Lista de clientes</h1>

    <p>Bem-vindo(a), <?php echo htmlspecialchars($_SESSION["cliente"]); ?>!</p>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
        </tr>

        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?php echo htmlspecialchars($cliente["id"]); ?></td>
            <td><?php echo htmlspecialchars($cliente["nome"]); ?></td>
            <td><?php echo htmlspecialchars($cliente["cpf"]); ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <br>

    <a href="logout.php">Sair</a>

</body>
</html>
