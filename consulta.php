<?php 
include 'Dao.php';
$dao = new Dao();


$resultado = $dao->verificaUsuario($_GET['usuario'],$_GET['senha']);

if($resultado) { 
 include_once 'home.php';
} else { 
    echo "<script>alert('Usuario ou Senha incorreto');</script>";
    ;
    include_once 'index.php';
}


?>