<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="cabecalho.css">
    <title>Recomendação</title>
        <header>
    <h1 class="cabecalho">Space-Techs</h1>
    <nav>
    <ul id="menu">
            <li><a href="../home.php">Home</a>
            <li><a href="../noticia/noticia.php">Noticias</a></li>
            <li><a href="../sobre/sobre.php">Sobre</a></li>
            <li><a href="recomendacao.php">Recomendações</a></li> 
            <li><a href="../loja/loja.php">Loja</a></li>
            <li><a href="../contato/contato.php">Contato</a></li>
            </li>    
        </ul>
</nav>
    </header>
</head>
<body>


    <section class="home">
        <div class="home-img">
            <img src="home1.jpg" class="one">
        </div><!--home-img-->

        <div class="home-text">

            <h1>Oshi no Ko</h1>
            <h5>Ai Hoshino, de 16 anos, é uma linda e talentosa idol que é adorada pelos seus fãs. Ela é o epítome da pureza, mas nem tudo o que reluz é ouro… Gorou Honda é uma ginecologista de uma zona rural e grande fã de Ai. Então, quando a idol grávida aparece no seu hospital, ele fica mais do que perplexo.</h5>
            <h3>Disponivel em Breve no Disney Plus</h3>
            <a href="#" class="btn">Veja Mais</a>
            
        </div><!--home-text-->
    </section><!--home-->


    <div class="main">
        <div class="row">
   <p class="onem" onclick="slider('home1.jpg')">1</p>
        </div><!--row-->

        <div class="row2">
        <p onclick="slider('home2.jpg')">2</p>
        </div><!--row2-->

        <div class="row3">
            <p onclick="slider('home3.png')">3</p>
        </div><!--row3-->
    </div><!--main-->





     
  
    <script>
        function slider (anything){
            document.querySelector ('.one') .src = anything;
        };

       let menu = document.querySelector ('#menu-icon');
       let navbar = document.querySelector ('.navbar');

       menu.onclick = () => {
        menu.classList.toggle ('bx-x');
        navbar.classList.toggle ('open');
       }
    </script>
    
</body>
</html>