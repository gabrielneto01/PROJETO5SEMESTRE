<?php 

if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

include("conexao.php");

$result = mysqli_query($conexao, "SELECT `codigo`, `nome`,`senha`, `email` FROM `usuarios` WHERE `email` ='".$_POST["email"]."' AND `senha`='".$_POST["senha"]."'");

// verificando se o usuario esta logado
if(mysqli_num_rows($result) > 0) {

    // Trazendo  o nome e o codigo da consulta do banco
     while ($usuario = mysqli_fetch_array($result))
    {

        //Definindo valores na sessão:
        $_SESSION['codigo'] = $usuario['codigo'];
        $_SESSION['nome_usuario'] = $usuario['nome'];    
        
     }   
    
    echo "
	<script language='javascript'>
		<!--
			alert('Login efetuado com sucesso!');
		
			window.location.assign('Lista.php');
		//-->
    </script>";
} else {
    
    echo "
	<script language='javascript'>
		<!--
			alert('Usuario não cadastrado. Tente novamente.');
		
			window.location.assign('logar.php');
		//-->
    </script>";
}
	
?>