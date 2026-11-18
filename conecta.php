
<?php
$host = "sql205.infinityfree.com";
$banco = "if0_43455432_renovaree";
$usuario = "if0_43455432";
$senha = "k6ncueeR4rfPB";

try {
    $conexao = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $erro) {
    die("Erro na conexão com o banco de dados: " . $erro->getMessage());
}
?>

