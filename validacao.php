<?php
function valida($valor){
if($valor > 10){
    echo "Valor maior que 10 <br>";
    $valor = $valor+9;
    echo "Novo valor quando maior que 10: ".$valor. "<br>";
}else {
    echo "valor menor ou igual a 10".$valor."<br>";
    $valor=$valor+8;
    echo "Novo valor quando menor de 10: ".$valor."<br>";
 } 
 return $valor;
   }

function mostra($valor){
    echo "Novo valor da Variavel:" .$valor;
}

$valor = $_POST['valor'];
$novoValor = valida(0);
mostra($novoValor1);

$novoValor2 = valida(10);
mostra($novoValor2);
valida(11);
valdia(100);

?>
<a href ="index.php"> Voltar </a>