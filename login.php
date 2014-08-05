<?php
echo '<meta charset = UTF-8>';
include_once 'classes/Bcrypt.class.php';

// O include_once, inclui qualquer arquivo quando for necessário, ou seja, só inclui um arquivo se o mesmo
// não tiver sido incluído anteriormente.
include_once'conexao/conecta.inc';
$email =isset($_POST['email'])?$_POST['email']:null;
$senha = isset($_POST['senha'])?$_POST['senha']:null;

$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
$totalUsuario = mysql_num_rows($result);
//echo $totalUsuario;
if($totalUsuario === 0)
{
    echo '<a href=frmlogin.php>Usuário não encontrado!</a>';
}else{
    $usuarios = mysql_fetch_array($result);
    $senhaUsuario = $usuarios['SENHA_USUARIO'];
    $tipoUsuario = $usuarios['TIPO_USUARIO'];
    $hash = $usuarios['SENHA_USUARIO'];
    if(Bcrypt::check($senha, $hash) !== $senhaUsuario){
        echo '<a href=frmlogin.php>Senha não confere !</a>';
    } else {
        // Agora temos o usuário e senha corretos 
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['tipoUsuario'] = $tipoUsuario;
        if($tipoUsuario === 'RES'){
            echo '<script type = "text/javascript">
                     location.href="indexrestrito.php"
                 </script>';
        }elseif($tipoUsuario === 'ADM'){
            echo '<script type="text/javascript">
                    location.href="admin/indexadmin.php"
                  </script>';
        }else{
            echo 'Tipo de Usuário inválido';
        }
        
        
    }
}

