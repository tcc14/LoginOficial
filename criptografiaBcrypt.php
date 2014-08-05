<?php

echo '<meta charset=UTF-8>';
include_once 'classes/Bcrypt.class.php';
include_once 'conexao/conecta.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO ='$email' ";
$result = mysql_query($query);
$usuarios = mysql_fetch_assoc($result);
$hash = $usuarios ['SENHA_USUARIO'];
if(Bcrypt::check($senha, $hash))
{
    echo 'Senha OK !'; 
}else{
    echo 'Senha incorreta !';
}