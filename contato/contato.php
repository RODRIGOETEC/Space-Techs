<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/cabecalho.css">
    <link rel="stylesheet" href="style.css">
    <title>Contato</title>
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
            <li><a href="../recomendacao/recomendacao.php">Recomendações</a></li> 
            <li><a href="../loja/loja.php">Loja</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="../sair.php">Sair</a></li>
            </li>        
        </ul>
</nav>
</header>
</head>
<body>
<div class="tudo">
<h1>Caso esteja com problema em usar o nosso site você tem até 3 metodos para entrar em contato conosco</h1><br><br>
<h2>Numero: </h2>
<p>(11) 95637-4218</p>
<h2>Email: </h2>
<p>spacetechs@gmail.com</p>
<form action="controle.php">
<h2>Escreva o problema: </h2>
<textarea id="msg" name="msg" rows="4" cols="50" maxlength="500" placeholder="Informe seu problema" required></textarea><br>
<input class="btn_contatos" type="submit" value="Enviar problema">
<h1>Esperamos ter te ajudado</h1>
<img src="rosb.png">
</div>
</form>
    
</body>
</html>