<?php
// Conectar ao banco de dados
$dsn = "mysql:host=localhost;dbname=spacetechs";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

// Processar o formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $iduser = $_POST["iduser"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $codigo = $_POST["codigo"];
    $senha = $_POST["senha"];
    $nascimento = $_POST["nascimento"];

    // Inserir os dados no banco de dados
    $query = "INSERT INTO usuario (iduser, sobrenome, nome, email, numero, codigo, senha, nascimento) VALUES ('$iduser', '$sobrenome', '$nome', '$email', '$numero', '$codigo', '$senha', '$nascimento')";
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
    <style>
        body{
            background-color:#201b2c;
            text-align: center;
	justify-content: center;
	align-items: center;
    text-decoration-color: #ffffff;
        }
        h1{
            color:#ffffff;
        }

        label{
            color:#ffffff;
        }
        a{
            font-size: 20px;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" required><br><br>

        <label for="iduser">Usuario:</label>
        <input type="iduser" name="iduser" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="numero">Numero:</label>
        <input type="number" name="numero" maxLength="9" required><br><br>

        <label for="codigo">Codigo 6 Digitos:</label>
        <input type="codigo" name="codigo" maxLength="6" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <label for="nascimento">Data de nascimento:</label>
        <input type="date" name="nascimento" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    <br><br>
    <a href="index.php">Voltar</a>
</body>
</html>