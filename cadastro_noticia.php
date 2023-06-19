<?php
// Conectar ao banco de dados
$dsn = "mysql:host=localhost;dbname=spacetechs";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

// Processar o formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idnoticia = "";
    $titulo_not = $_POST["titulo_not"];
    $desc_not = $_POST["desc_not"];
    $conteudo_not = $_POST["conteudo_not"];
    $link_not = $_POST["link_not"];
    $data_not = $_POST["data_not"];

    // Inserir os dados no banco de dados
    $query = "INSERT INTO noticia (idnoticia, titulo_not, desc_not, conteudo_not, link_not, data_not ) VALUES ('$idnoticia', '$titulo_not', '$desc_not','$conteudo_not', '$link_not', '$data_not')";
    $stmt = $pdo->prepare($query);
    if ($stmt->execute()) {
        echo "Noticia Cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($pdo);
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Noticia</title>
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
    <h1>Cadastro de Noticia</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="titulo_not">Titulo da Noticia:<br></label>
        <input type="text" name="titulo_not" required><br><br>

        <label for="desc_not">Descrição da Noticia:<br></label>
        <input type="text" name="desc_not" required><br><br>

        <label for="conteudo_not">Conteudo da Noticia:<br></label>
        <input type="text" name="conteudo_not"required><br><br>

        <label for="link_not">Link da Noticia:<br></label>
        <input type="link" name="link_not"required><br><br>

        <label for="data_not">Data da Noticia:<br></label>
        <input type="date" name="data_not"required><br><br>

        <input type="submit" value="Cadastrar"><br><br>
    </form>
<a href="home.php">Voltar</a>
</html>