<?php
  $paginas = ['Noticias'=>'Noticias aqui!','sobre'=>'estou na pagina sobre','contato'=>'<form><input type ="text" placeholder="Seu nome..."/></form>','FAQ'=> 'perguntas frequentes','Loja'=>'conteudo loja'];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Projeto</title>
  <style>
    <?php include "css.php" ?>
  </style>
</head>
<body>
    <header>
        <?php
        foreach ($paginas as $key => $value) {
            echo '<a href ="page='.$key.'">'.ucfirst($key).'</a>';
        }
        ?>
    </header>
 <section>
 <h2> <?php

$pagina = (isset($_GET['page']) ? $_GET['page'] : 'home'); 

if(!array_key_exists($pagina, $paginas)){
$pagina = 'home';
}

echo ucfirst($pagina);

?></h2>
 </section>
</body>
</html>