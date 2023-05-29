<?php
include_once 'Endereco.php';
class Pessoa {
    public $nome;
    public $sobrenome; 
    public $numero;
    public $email;
    public $endereco;
    public $usuario;
    public $senha; 
    public $cod_segurança;  
    public $dtnasc; 
    

   
    public function mostraDados(){
        $this->p($this->nome);
        $this->p($this->sobrenome);
        $this->p($this->numero);
        $this->p($this->email);
        $this->p($this->endereco);
        $this->p($this->usuario);
        $this->p($this->senha);
        $this->p($this->cod_segurança);
        $this->p($this->dtnasc);

    }

    function p($dados){
        echo $dados."<br>";
    }
}