<?php 

if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

include("conexao.php");
//include 'conexao.php';
// echo 'cadastro';

// // echo "login";
// // //var_dump($_POST['']);
// // $a=$_POST;
// // echo '<pre>';
// // print_r ($a);
// // echo '</pre>';
// // window.location.assign('http://www.devmedia.com.br');
// print_r($_POST);

$result = mysqli_query($conexao, "SELECT `nome`,`senha`, `email` FROM `usuarios` WHERE `email` = '".$_POST["email"]."' AND `senha`='".$_POST["senha"]."' AND `nome`='".$_POST["nome"]."'");

// verificando se o usuario esta logado
if(mysqli_num_rows($result) > 0) {
    echo "
	<script language='javascript'>
		<!--
			alert('Usuario cadastrado favor realizar o login.');
		
			window.location.assign('logar.php');
		//-->
    </script>";
    
} else {
    
    $result = mysqli_query($conexao, "INSERT INTO `usuarios`(`nome`, `senha`, `email`, `plano`, `pagamento`) VALUES ('".$_POST["nome"]."','".$_POST["senha"]."','".$_POST["email"]."','".$_POST["plano"]."','".$_POST["options"]."')");

    //buscando pelo ultimo cadsatro
    $codigo = mysqli_insert_id($conexao) ;
    
    //Definindo valores na sessão:
    $_SESSION['codigo'] = $codigo;
    $_SESSION['nome_usuario'] = $_POST['nome'];

    //criando url para a pagina inicial
    $paginaInicial = "index.php";
    
    //disparando o alerta para o ususario e redirecionando para a pagina principal
    echo "
    	<script language='javascript'>
    		<!--
    			alert('Cadastro efetuado com sucesso!');
    		
    			window.location.assign('".$paginaInicial."');
    		//-->
        </script>";
}

	
	
?>