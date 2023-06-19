<?php

class Dao { 
    private $dsn='mysql:host=localhost;dbname=spaceTechs';
    private $usuario='root';
    private $senha=''; 
    private $pdo; 

public function __construct(){

    $this->pdo = new PDO($this->dsn, $this->usuario, $this->senha);
}

public function listaUsuarios(){
$resultado = $this->pdo->query("Select * from usuario");
return $resultado;
}

public function cadastrarUsuario($usuario,$senha){
    $this->pdo->query("insert into usuario values ('$usuario', '$senha') ");
}

public function verificaUsuario($usuario,$senha){
 $stmt = $this->pdo->query("select * from usuario where iduser='$usuario' and senha='$senha'");
 $resultado = $stmt->fetch();
 return $resultado;
}

public function inserirUsuario($usuario,$senha){
    $stmt = $this->pdo->query("insert into usuario values('$usuario','$senha')");
    $resultado = $stmt->execute();
    return $resultado; 
}

}