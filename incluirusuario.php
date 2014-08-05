<?php

include_once 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';
$nome = $_POST['nome'];
$email = $_POST['login'];
$senha = $_POST['senha'];
$tipoUsuario = 'RES';

$query = "INSERT INTO usuario (NOME_USUARIO,EMAIL_USUARIO,SENHA_USUARIO,TIPO_USUARIO)";
$query.= "VALUES('$nome','$email','$senha','$tipoUsuario')";

if(mysql_query($query))
{
    echo '<script> alert ("Usuário cadastrado com sucesso !")</script>';
    echo '<a href=frmlogin.php>Efetuar Login</a>';
    
}  else {
    echo '<script> alert("Não Foi possível concluir o cadastro!") 
         location.href=index.php
                 </script>';
}