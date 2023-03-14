<?php
  $paginas = ['Noticias'=>'Noticias aqui!','sobre'=>'estou na pagina sobre'
  ,'Recoemdações'=> 'Recomendações de Jogos e outras coisas','Loja'=>'conteudo loja','Contato'=>'Contato de ajuda'];


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
    <legend>Aqui nesse site você encontrará conteudo da cultura Geek e Tech como: Animes, Jogos, series, Filmes e muito mais </legend>
  </table>
  </fieldset>
  
  
  </form>
  <br>
  <br>
  <form name="fomr2" method="post">
  <fieldset>
    <table> 
      <legend>Curiosidade</legend>
      <legend>*Anime de Solo Leveling foi adiado para 2024, sem data pra lançamento <legend>
        <br>
        <legend>*O nome Kratos, de God Of War, vem da palavra grega “cratos” que significa poder</legend>
        <br>
        <legend>*O lamen Ichiraku de Naruto já existiu na vida real</legend>
        <br>
        <legend>*Os personagens de Code Geass adoram pizza porque o anime foi financiado pela Pizza Hut</legend>
</body>
</html>