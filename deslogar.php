<?php 
//include("conexao.php");
// echo 'cadastro';

// // echo "login";
// // //var_dump($_POST['']);
// // $a=$_POST;
// // echo '<pre>';
// // print_r ($a);
// // echo '</pre>';
// // window.location.assign('http://www.devmedia.com.br');
// print_r($_POST);
	
// $result = mysqli_query($conexao, "INSERT INTO `usuarios`(`codigo`, `nome`, `senha`, `email`, `plano`, `pagamento`) VALUES ('','".$_POST["nome"]."','".$_POST["senha"]."','".$_POST["email"]."','".$_POST["plano"]."','".$_POST["options"]."')");

// //printf("New record has ID %d.\n", mysqli_insert_id($conexao));

// //buscando pelo ultimo cadsatro
// $codigo = mysqli_insert_id($conexao) ;

//if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
//}
//Definindo valores na sessão:
//$_SESSION['codigo'] = 1;

//$codigo = $_SESSION['codigo'];
// $_SESSION['nome_usuario'] = 'Yure Pereira';
// $_SESSION['nome_login'] = 'yure_pereira';
//Destruindo a sessão:
session_destroy();
//Mostrando os dados da sessão destruida:
print_r($_SESSION);


//criando url para a pagina inicial
 //$paginaInicial = "index.php?log=".$codigo;
$paginaInicial = "index.php";

//disparando o alerta para o ususario e redirecionando para a pagina principal
echo "
	<script language='javascript'>
		<!--
			alert('Deslogandoo');
		
			window.location.assign('".$paginaInicial."');
		//-->
    </script>";
	
	// //Iniciando a sessão:

	
	
?>