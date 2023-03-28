<?php
  $paginas = ['Noticias'=>'Noticias aqui!','sobre'=>'estou na pagina sobre'
  ,'Recomendações'=> 'Recomendações de Jogos e outras coisas','Loja'=>'conteudo loja','Contato'=>'Contato de ajuda'];


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

    <table>
    <p>Aqui nesse site você encontrará conteudo da cultura Geek e Tech como: Animes, Jogos, series, Filmes e muito mais. <br>
     Tambem tera nossa loja onde você pode comprar ou até mesmo divulgar e vender seus produtos,
      lembrando que terá as regras para se cumprir para que o site seja 100% seguro
  </p>
  </table>
  </fieldset>
  </form>
  <br>
  <br>
  <form name="fomr2" method="post">
  <fieldset>
    <table>
      
      <legend>Curiosidade</legend>
      <p>*Anime de Solo Leveling foi adiado para 2024, sem data pra lançamento </p>
        <p>*O nome Kratos, de God Of War, vem da palavra grega “cratos” que significa poder</p>
        <p>*O lamen Ichiraku de Naruto já existiu na vida real</p>
        <p>*Os personagens de Code Geass adoram pizza porque o anime foi financiado pela Pizza Hut</p>
  </table>
  </fieldset>
  </form>
<br>
<br>
  <form name="form3" method="Post">
    <fieldset>
    <legend>Jogos Lançamentos</legend>

    <table>
Jogos que serão lançado em 2023 <br> <br>
<tr>
  <th>Nome Jogos</th>
  <th>Data Lançamento</th>
  <th>Consoles disponiveis </th>
</tr>
<tr>
  <th> <a href="https://store.steampowered.com/app/2050650/Resident_Evil_4/">Resident Evil 4</a></th>
  <th><24 de março</th>
  <th> PlayStation4/5,Xbox Series S/X e Microsoft Windows</th>
  <th>  <a href="https://store.steampowered.com/app/2050650/Resident_Evil_4/">Resident Evil 4</a></th>
</tr>
<tr>
  <th>Hogwarts Legacy</th>
  <th>7 de fevereiro</th>
  <th> PlayStation 4/5, Xbox Series S/X, Xbox One,
    <br> Nintendo Switch, Microsoft Windows</th>
</tr>
  </table>
  </fieldset>
  </form>
<br>
<br>
  <form name="form4" method="Post">
    <fieldset>
    <legend>Empresas de jogos saem do Brasil</legend>
    <table>
      <p>Diversas Empresas no ramo de jogos como Microsft, Nintendo, Sony e diversas outras estão saindo do Brasil por causa do aumento de 
        impostos nos jogos que as previsões cheguem em até 40%
      </p>
  </table>
  </fieldset>
  </form>
  
</body>
</html>