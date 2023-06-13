<?php
// Conectar ao banco de dados
$dsn = "mysql:host=localhost;dbname=spacetechs";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

// Processar o formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $iduser = "";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Inserir os dados no banco de dados
    $query = "INSERT INTO usuario (iduser, nome, email, senha) VALUES ('$iduser', '$nome', '$email', '$senha')";
    $stmt = $pdo->prepare($query);
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($pdo);
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>