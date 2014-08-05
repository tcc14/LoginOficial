<?php

function validaAutenticacao($link, $tipo){
    echo '<meta charset = "UTF-8">';
    // abrir sessão
    session_start(); 
    // Se não foi definido a sessão senha ou email
    // você não efetuou o login, logo direciono para a página de login
    if(!isset($_SESSION['email']) or !isset($_SESSION['senha'])){
        session_destroy();
        echo '<script>
                   alert("Acesso negado !\n Você não efetuou login.")
                   location.href="'.$link.'"
              </script>';
   
      }else {
         // Agora precisa ter certeza que a sessão criada(login.php) corresponde de fato ao usuário que esta tentando acessar
         if($tipo === 'RES'){include_once 'conexao/conecta.inc';} 
         if($tipo === 'ADM'){include_once '../conexao/conecta.inc';}
         $email = $_SESSION['email'];
         $senha = $_SESSION['senha'];
         $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
         $result = mysql_query($query);
          $totalUsuario = mysql_num_rows($result);  
          
         if($totalUsuario !== 0){
             //Preciso testar a senha
             $usuarios = mysql_fetch_assoc($result);
             $senhaBanco = $usuarios['SENHA_USUARIO'];
             $tipoBanco = $usuarios['TIPO_USUARIO'];
             if($senha !== $senhaBanco){
                 session_destroy();
              echo '<script>
                 alert("Acesso Negado !\n Senha do Usuário não confere")
                 location.href = "'.$link.'"
                 </script>';
           }
         }else {
             session_destroy();
               echo '<script>
               alert("Acesso Negado !\n Email do Usuário não confere")
                 location.href = "'.$link.'"
                 </script>';
           }
           
           
           
        if($tipo !== $tipoBanco){
            session_destroy();
         echo '<script>
               alert("Acesso Negado !\n Você não tem permissão de acesso a esta página")
                 location.href = "'.$link.'"
                 </script>';
      } 
   }
}  