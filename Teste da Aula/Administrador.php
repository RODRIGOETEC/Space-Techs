<?php 
include_once 'Pessoa.php';
class Administrador extends Pessoa { 
 public $trabalho;
 public $altera;


 function mostraDados()
 {
    parent::mostraDados();
    $this->p("trabalho: ".$this->trabalho);
    $this->p("Altera: ".$this->altera);
     }
      }