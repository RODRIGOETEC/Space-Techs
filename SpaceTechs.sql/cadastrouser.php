<?php

$dsn = "mysql:host=localhost;dbname=SpaceTechs";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);
$iduser = '1';
$nome_user = 'Usuario';
$sob_user = 'Usuario';
$name_user = 'Usuario';
$email_user = 'Usuario';
$cod_user = 'Usuario';
$numero_user = '1';
$senha_user = 'Usuario';
//$nasc_user = 'Usuario';
$query = "INSERT INTO usuario ($iduser, $nome_user, $sob_user, $name_user, $email_user, $cod_user, $numero_user, $senha_user)values";

$stmt = $pdo->prepare($query);
if($stmt->execute()){
    echo 'usuario criado';
}else{
    echo 'erro ao inserir usuario';
}

?>