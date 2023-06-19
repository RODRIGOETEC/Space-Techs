<?php
// Conectar ao banco de dados
$dsn = "mysql:host=localhost;dbname=spacetechs";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

// Processar o formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idproduto = "";
    $nome_produto = $_POST["nome_produto"];
    $desc_produto = $_POST["desc_produto"];
    $valor_produto = $_POST["valor_produto"];


    // Inserir os dados no banco de dados
    $query = "INSERT INTO produto (idproduto, nome_produto, desc_produto, valor_produto) VALUES ('$idproduto', '$nome_produto', '$desc_produto','$valor_produto')";
    $stmt = $pdo->prepare($query);
    if ($stmt->execute()) {
        echo "Produto Cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($pdo);
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos</title>
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
    <h1>Cadastro de Produtos</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nome_produto">Nome do Produto:<br></label>
        <input type="text" name="nome_produto" required><br><br>

        <label for="desc_produto">Descrição do Produto: <br></label>
        <input type="text" name="desc_produto" required><br><br>

        <label for="valor_produto">Valor do Produto:<br></label>
        <input type="text" name="valor_produto" required><br><br>

        <input type="submit" value="Cadastrar"><br><br>
    </form>
<a href="home.php">Voltar</a>
</html>