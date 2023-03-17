<?php

$valor1 = $_POST['numero1'];
$valor2 = $_POST['numero2'];

function soma($n1, $n2){    
    $resultado = $n1+$n2;
    echo "<br>Resultado: ".$resultado; 
}
  
  soma($valor1,$valor2); 

?>