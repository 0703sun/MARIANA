
<?php
require_once "conecta.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cpf = $_POST["cpf"] ?? "";
    $senha = $_POST["senha"] ?? "";

    // Consulta preparada para evitar SQL Injection
    $sql = "SELECT * FROM cliente
            WHERE cpf = :cpf AND senha = :senha";

    $consulta = $conexao->prepare($sql);

    $consulta->execute([
        ":cpf" => $cpf,
        ":senha" => $senha
    ]);

    $cliente = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($cliente) {

        session_start();

        $_SESSION["cliente"] = $cliente["nome"];
        $_SESSION["cpf"] = $cliente["cpf"];

        header("Location: lista.php");
        exit();

    } else {

        echo "<h2>CPF ou senha incorretos!</h2>";
        echo '<a href="index.php">Voltar ao login</a>';

    }

} else {
    header("Location: index.php");
    exit();
}
?>
