<?php
// dados de configuração 
echo '<meta charset = UTF-8>';
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '12345678'; 
$banco    = 'loginoficialdb';

//estabelecendo a conexão com o Mysql e selecionando o banco de dados

$connection = mysql_connect($servidor,$usuario,$senha);
if($connection === FALSE)
{
    echo 'Não foi possível a conexão com banco Mysql <br/>';
    echo mysql_error();
}else{
    $connection_Db = mysql_select_db($banco, $connection);
    if(!$connection_Db){
        echo 'Não foi possível selecionar o banco' . $banco . '<br/>';
        echo mysql_error();
    }
}