<?php
// Conectar ao banco de dados
$dsn = "mysql:host=localhost;dbname=spacetechs";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

// Processar o formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idrecomendacao = "";
    $titulo_rec = $_POST["titulo_rec"];
    $conteudo_rec = $_POST["conteudo_rec"];
    $acessar_rec = $_POST["acessar_rec"];
    $link_rec = $_POST["link_rec"];
    $data_rec = $_POST["data_rec"];

    // Inserir os dados no banco de dados
    $query = "INSERT INTO recomendacao (idrecomendacao, titulo_rec, conteudo_rec, acessar_rec, link_rec, data_rec) VALUES ('$idrecomendacao', '$titulo_rec', '$conteudo_rec', '$acessar_rec', '$link_rec', '$data_rec')";
    $stmt = $pdo->prepare($query);
    if ($stmt->execute()) {
        echo "Recomendação Cadastrado com sucesso!";
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
    <h1>Cadastro de Recomendação</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="titulo_rec">Nome da Recomendação:<br></label>
        <input type="text" name="titulo_rec" required><br><br>

        <label for="conteudo_rec">Conteudo da Recomendação: <br></label>
        <input type="text" name="conteudo_rec" required><br><br>

        <label for="acessar_rec">Onde assistir ou comprar?:<br></label>
        <input type="text" name="acessar_rec" required><br><br>

         <label for="link_rec">Onde assistir ou comprar?:<br></label>
        <input type="text" name="link_rec" required><br><br>

        <label for="data_rec">Onde assistir ou comprar?:<br></label>
        <input type="date" name="data_rec" required><br><br>

        <input type="submit" value="Cadastrar"><br><br>
    </form>
<a href="home.php">Voltar</a>
</html>