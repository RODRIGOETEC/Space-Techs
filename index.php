<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UACompatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>
<body>
	<div class="main-login">
		<div class="left-login">
			<h1>Faça Login<br>E aproveite o Space-Techs</h1>
	<img src="imagem/gamer.svg" class="left-login-image" alt="Gamer Animação">
		</div>
		<div class="right-login">
		<div class="card-login">
			<h1>LOGIN</h1>
				<form action="home.php"> 
			<div class="textfield">
			   <label for="usuario">Usuário</label>
			   <input type="text" name="usuario" placeholder="Usuário" required> 
			</div>
			<div class="textfield">
			   <label for="senha">Senha</label>
			   <input type="password" name="senha" placeholder="Senha" required> 
			</div>
	<input class="btn-login" type="submit" value="Login">
	</form>
	
			<div class="btn-2">
				<button class="btn-cadastro"><a href="cadastro_user.php"><p>Cadastre-se</p></a></button>
			<button class="btn-es"><a href="esenha.php"><p>Esqueceu a Senha?</p></a></button>
		</div>
	</div>
	</div>
</body>
</html>