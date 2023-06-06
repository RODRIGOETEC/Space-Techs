<?php

$dsn = "mysql:host=localhost;dbname=SpaceTechs";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);
$nome_user = 'Usuario';
$sob_user = 'Usuario';
$name_user = 'Usuario';
$email_user = 'Usuario';
$cod_user = 'Usuario';
$numero_user = 'Usuario';
$senha_user = 'Usuario';
$nasc_user = 'Usuario';
$stmt = $pdo->query("insert into usuario values('$nome_user, $sob_user, $name_user, $email_user, $cod_user, $numero_user, $senha_user,$nasc_user')");
if($stmt){
    echo 'usuario criado';
}else{
    echo 'erro ao inserir usuario';
}

?>