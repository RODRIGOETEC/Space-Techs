<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exibir User</title>
    <link rel="stylesheet" href="estilo/cabecalho.css">
    <header>
    <h1 class="cabecalho">Space-Techs</h1>
    <nav>
    <ul id="menu">
        <li> <a href="listas.php">Usuarios</a></li>
    <li><a href="">Cadastros</a>
                <ul id="submenu">
                    <li><a href="cadastro_noticia.php">Cadastrar Noticia</a></li>
                <li><a href="cadastro_produto.php">Cadastro de <br>produtos</a></li>
            <li><a href="cadastro_rec.php">Cadastro de <br>Recomendação</a></li>
            </ul>
            </li>
            <li><a href="home.php">Home</a>
            <li><a href="noticia/noticia.php">Noticias</a></li>
            <li><a href="sobre/sobre.php">Sobre</a></li>
            <li><a href="recomendacao/recomendacao.php">Recomendações</a></li> 
            <li><a href="loja/loja.php">Loja</a></li>
            <li><a href="contato/contato.php">Contato</a></li>
            <li><a href="sair.php">Sair</a></li>
            </li>        
        </ul>
</nav>
</header>
  </head>
  <style>
    h1{
        color: #00ff88;
    }
    body{
        background-color:#201b2c;
        text-align: center;
    }
 
    table.borda {
    border-collapse: collapse; /* CSS2 */
    font-size: 30px;
    text-align: center;
    color: #00ff88 ;
}
 
table.borda td {
    border: 2px solid white;
    text-align: center;
    color: #ffffff ;
}
 
table.borda th {
    border: 2px solid white;
 width: 10%;
  table-layout: fixed;
  text-align: center;
  color: #00ff88 ;
    background-color:#201b2c ;
}
  </style>
  <body>
<h1>Usuarios Cadastrados</h1>
<?php 
include 'Dao.php';
$dao = new Dao();
$resultado = $dao->listaUsuarios();
?>
<br><br>
<table class="borda">
  <thead>
    <tr class="borda">
      <th class="borda" scope="col">Usuario</th>
      <th class="borda" scope="col">Nome</th>
      <th class="borda" scope="col">Sobrenome</th>
      <th class="borda" scope="col">Email</th>
      <th class="borda" scope="col">Numero</th>
      <th class="borda" scope="col">Senha</th>
      <th class="borda" scope="col">Nascimento</th>
    </tr>
  </thead>
  <tbody>

<?php
while($usuario = $resultado->fetch()){
?>
    <tr>
      <td><?php echo $usuario['iduser']?></td>
      <td><?php echo $usuario['nome']?></td>
      <td><?php echo $usuario['sobrenome']?></td>
      <td><?php echo $usuario['email']?></td>
      <td><?php echo $usuario['numero']?></td>
      <td><?php echo $usuario['senha']?></td>
      <td><?php echo $usuario['nascimento']?></td>
    </tr>
   
<?php
}
?>
  </tbody>
</table> 


  </body>
</html>