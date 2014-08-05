<?php

echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.php';
$nome = isset($_POST['nome'])?$_POST['nome']:null;
$email = isset($_POST['email'])?$_POST['email']:null;
$senha = isset($_POST['senha'])?$_POST['senha']:null;
$senha = Bcrypt::hash($senha);

//echo $nome;
//echo $email;
//echo $senha;

$inserir = "INSERT INTO usuario (NOME_USUARIO, EMAIL_USUARIO, SENHA_USUARIO, TIPO_USUARIO)"
. "VALUES ('$nome', '$email', '$senha', 'RES')";
mysql_query($inserir);

if(mysql_query($query))
    echo '<script>alert("Cadastrado com sucesso")</script>';
else 
    echo mysql_error(); 
/*$result = mysql_query($inserirNome);
$inserirEmail = "INSERT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($inserirEmail);
$inserirSenha = "INSERT * FROM usuario WHERE SENHA_USUARIO = '$senha'";
$result = mysql_query($inserirSenha);

echo $inserirNome;
echo $inserirEmail;
echo $inserirSenha; */

