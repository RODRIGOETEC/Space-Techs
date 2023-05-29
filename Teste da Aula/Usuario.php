<?php 
include_once 'Pessoa.php';
class Usuario extends Pessoa{
public $codCliente;

public function __construct($nome)
{
    $this->nome = $nome;
}
}