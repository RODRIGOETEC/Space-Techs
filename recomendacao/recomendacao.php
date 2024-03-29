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
    <li> <a href="../listas.php">Usuarios</a></li>
    <li><a href="">Cadastros</a>
                <ul id="submenu">
                    <li><a href="../cadastro_noticia.php">Cadastrar Noticia</a></li>
                <li><a href="../cadastro_produto.php">Cadastro de <br>produtos</a></li>
            <li><a href="../cadastro_rec.php">Cadastro de <br>Recomendação</a></li>
            </ul>
            </li>
            <li><a href="../home.php">Home</a>
            <li><a href="../noticia/noticia.php">Noticias</a></li>
            <li><a href="../sobre/sobre.php">Sobre</a></li>
            <li><a href="recomendacao.php">Recomendações</a></li> 
            <li><a href="../loja/loja.php">Loja</a></li>
            <li><a href="../contato/contato.php">Contato</a></li>
            <li><a href="../sair.php">Sair</a></li>
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

            <h1 id="titulo">Oshi no Ko</h1>
            <h5 id="desc">Ai Hoshino, de 16 anos, é uma linda e talentosa idol que é adorada pelos seus fãs. Ela é o epítome da pureza, mas nem tudo o que reluz é ouro… Gorou Honda é uma ginecologista de uma zona rural e grande fã de Ai. Então, quando a idol grávida aparece no seu hospital, ele fica mais do que perplexo.</h5>
            <h3 id="text">Disponivel em Breve no Disney Plus</h3>
            <a href="#" class="btn">Veja Mais</a>
            
        </div><!--home-text-->
    </section><!--home-->


    <div class="main">
        <div class="row">
   <p class="onem" onclick="slider('home1.jpg','Oshi no Ko','Ai Hoshino, de 16 anos, é uma linda e talentosa idol que é adorada pelos seus fãs. Ela é o epítome da pureza, mas nem tudo o que reluz é ouro… Gorou Honda é uma ginecologista de uma zona rural e grande fã de Ai. Então, quando a idol grávida aparece no seu hospital, ele fica mais do que perplexo.','Disponivel em Breve no Disney Plus')">1</p>
        </div><!--row-->

        <div class="row2">
        <p onclick="slider('home2.jpg','Homem-Aranha <br>Através do Aranhaverso','Depois de se reunir com Gwen Stacy, Homem-Aranha é jogado no multiverso, onde ele encontra uma equipe encarregada de proteger sua própria existência.','Já Nos Cinemas')">2</p>
        </div><!--row2-->

        <div class="row3">
            <p onclick="slider('home3.png','Elder Ring','Em Elden Ring, o jogador incorpora um Maculado, guerreiro guiado pela força da Graça para portar o poder do Anel Prístino e torna-se um Lorde Prístino. A trama tem como cenário as Terras Intermédias, um local governado pela Rainha Marika.','Disponivel em PS4, PS5, Xbox one, Xbox One Series S/X ')">3</p>
        </div><!--row3-->
    </div><!--main-->





     
  
    <script>
        function slider (anything, text1, text2, text3){
            document.getElementById ('titulo') .innerHTML = text1;
            document.getElementById ('desc') .innerHTML = text2;
            document.getElementById ('text') .innerHTML = text3;
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