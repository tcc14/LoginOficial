<!doctype html>
<html>
    <head>
        <title></title>
        <meta charset = "UTF-8">
        <meta lang ="pt-br">
    </head>
    <body>




        <form method= post action="inserirUsuario.php">
            <label>Nome:</label> <input type="text" name="nome" required> <br/>
            <label>Email:</label> <input type = email name="email" required> <br/>
            <label>Confirmar email:</label> <input type="text" name="confirmaEmail" required> <br/>
            <label>Senha:</label> <input type= password name="senha" required> <br/>
            <label>Confirmar Senha:</label> <input type="password" name="confirmaSenha" required> <br/>
            <input type= submit value="Logar">
        </form>
    </body>
</html>