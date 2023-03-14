<?php
  $paginas = ['Noticias'=>'Noticias aqui!','sobre'=>'estou na pagina sobre'
  ,'Recoemdações'=> 'Recomendações de Jogos e outras coisas','Loja'=>'conteudo loja','Contato'=>'Contato de ajuda'];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Projeto</title>
  <style>
    <?php include "css_menu.php" ?>
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
    <style>
    h1 {
        margin: 30px;
        padding: 10px;
        box-sizing: border-box;
        text-align: center;
        font-size: 30
    }
    </style>
    <h1> Space Techs </h1> 
    <form name="fomr1" method="post">
    <fieldset>
    <legend>Oque é o site</legend>
    <tabble>

  </table>
  </fieldset>
  </form>
  <footer>
    123456
  </footer>
</body>

</html>