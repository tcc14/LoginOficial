<!doctype html>
<html>
    <head>
        <title></title>
        <meta charset = "UTF-8">
        <meta lang ="pt-br">
    </head>
    <body>
      <form method= post action="login.php">
          <label>Digite seu Nome </label><br/>
               <input type="text" name="nome" id="nome" />
		<br />
                <label>Digite um email válido</label><br/>
                <input type="text" name="login" id="login" />
		<br />
                  <label>Confirme o  email</label><br/>
                <input type="text" name="conflogin" id="conflogin" />
		<br />
		Senha:<br />
		<input type="password" name="senha" id="senha"/><br />
                <label>Confirme a Senha</label><br/>
		<input type="password" name="confsenha" id="confsenha"/><br />
                Aceito os termos e condições:<br />
		<input type="checkbox" name="termos" id="termos"><br />
		<input type="submit" value="Atualizar
                       " />
        </form>
        </body>
</html>