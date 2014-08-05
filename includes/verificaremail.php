<?php 

$email = $_GET['login'];

$servidor = 'localhost';
$usuario  = 'root';
$senha    = '12345678'; 
$banco    = 'loginoficialdb';


$connection = mysql_connect($servidor,$usuario,$senha);
$connection_Db = mysql_select_db($banco, $connection);
// montando e executando a query de consulta

$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
// Montando uma matriz para armazenar os emails cadastrados no banco de dados 
$emailsCadastrados = array();
while ($usuarios = mysql_fetch_assoc($result))
 {
    $emailBanco = $usuarios['EMAIL_USUARIO'];
    $emailsCadastrados[] = $emailBanco;
 } 
 // A função in_array, verifica se existe um determinado elemento dentro de uma matriz.
 // A funça recebe dois parametros: o valor pesquisado e a matriz de elementos"
 // veja:
 
 if(in_array($email, $emailsCadastrados))
 {
     echo 'false';
     
 }else{
     echo 'true';
 }
 exit();