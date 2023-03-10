<?php
  $paginas = ['home'=>'Minha pagina home aqui!','sobre'=>'estou na pagina sobre','contato'=>'<form><input type ="text" placeholder="Seu nome..."/></form>','FAQ'=> 'perguntas frequentes','Loja'=>'conteudo loja'];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Projeto</title>
    <style type="text/css">
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }

    header{
        background-color: blue;
        padding:8px 10px;
        text-align: center;
    }

    a{
        display: inline-block;
        margin: 0 10px;
        color: white;
        font-size: 17px;
    }


section{
    max-width: 960px;
    margin: 20px auto;
    padding: 0 2%;
}

h2{
background-color: blue;
color: white;
padding: 8px 10 px;

}

p{
    color:black;
    margin-top: 10px;
    font-size: 16px;
}
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