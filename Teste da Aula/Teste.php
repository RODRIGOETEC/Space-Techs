<?php 

include_once 'Usuario.php';
include_once 'Administrador.php';

$pessoa = new Pessoa('Pato Donald');
$Administrador = new Administrador($_POST['nome']);
$pessoa->mostraDados(1000);
