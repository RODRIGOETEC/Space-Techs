<form action="" method="post">
   <link rel="stylesheet" href="user.css">
   <div class="center-pag">  
   <h1>Cadasto de Usuário</h1>
   <br>
   <div class="textfield">
    <label for="nome_user">Nome<br></label>
<input type="text" name ="nome_user" placeholder="Nome" required><br>
</div>
<br>
<div class="textfield">
    <label for="sob_user">Sobrenome<br></label>
<input type="text" name ="sob_user" placeholder="Sobrenome" required><br>
</div>
<br>
<div class="textfield">
    <label for="name_user">Usuário<br></label>
<input type="text" name ="name_user" placeholder="Usuário" required><br>
</div>
<br>
<div class="textfield">
    <label for="email_user">Email<br></label>
<input type="text" name ="email_user" placeholder="Email" required><br>
</div>
<br>
<div class="textfield">
    <label for="cod_user">Código de Segurança de 6 digitos<br></label>
<input type="text" name ="cod_user" placeholder="EX:161384" maxLength="6" required><br>
</div>
<br>
<div class="textfield">
    <label for="numero_user">Numero do Usuário<br></label>
<input type="text" name ="numero_user" placeholder="EX:(11) 98722-5298" required><br>
</div>
<br>
<div class="textfield">
    <label for="senha_user">Senha<br></label> 
<input type="text" name ="senha_user" placeholder="Senha" required><br>
</div>
<br>
<div class="textfield">
    <label for="senha2_user">Confirme sua Senha<br></label>
<input type="text" name ="senha2_user" placeholder="Confirme sua Senha" required><br> <br>
</div>
<label for="dtnasc">Data de Nascimento</label><br>s
<input type="date" id="dtnasc" name="nasc_user" required>
<br>
<br>
<label arequired>Aceita o Termos de Contrato?</label><input type="checkbox" required><br>
<br>
<input class="btn_conta" type="submit" value="Criar Conta">
</div>
</form>