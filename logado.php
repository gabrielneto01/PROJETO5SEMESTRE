<?php

session_start();


include("conexao.php");

//print_r($_SESSION);
// if ($_GET['log']){
	// //criando a query
	// $sql = "SELECT * FROM usuarios WHERE codigo='".$_GET['log']."'";

	// //validando a conexão do banco com a query
	// $resultado = mysqli_query($conexao, $sql);

	// //criando a variavel $codigo
	// $nome = "";

// //realizando a pesquisa na tabela usuarios e retornando os valores
	// while ($row = mysqli_fetch_row($resultado)) {
		// //cada %s representa um valor, cada $row[0] representa o resultado da pesquisa na tebela acima
		// printf ("%s (%s) (%s)\n", $row[0], $row[1], $row[2]);
		// $nome = $row[1];
	// }
// } else {
	// $codigo = "0";
	// $nome = "0";
// }

//echo $nome;
	



//$voltarIndex = 'index.php?log='.$_SESSION['codigo'];

?>

    
<!--<h1>
	VOCÊ ESTA LOGADO
</h1>-->
//<?php
//	echo "<a href ='".$voltarIndex."'> voltar </a>";	
//?>

<!DOCTYPE html>
<html lang="pt-br">

 <head>
    <meta charset="utf-8">
       
    <title>Play Tec - Contato</title>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="./css/maincont.css">
 </head>
          
 <body>
        <div class=fundo>
	        <a href="index.php"><div  class="logo2"></div></a>
            <span  class="lista"><a href="Lista.php" class="btn">Lista de Jogos</a></span>
            <span  class="como"><a href="como.php" class="btn">Como Funciona</a></span>
            <span  class="cont"><a href="contato.php" class="btn">Contato</a></span>
            <!--<span  class="cadastrar"><a href='cadastro.html' class="btn">Entrar</a></span>-->
      
           <?php
                if ($_SESSION['nome_usuario']){
                   // echo "
                    //    <span class='cadastrar'>
                    //        <a href='cadastro.html' class='btn'>
                     //           ".$_SESSION['nome_usuario']."
                     //       </a>
                     //   </span>
                    //";
                    echo "<span class='cadastrar'><a href='deslogar.php' class='btn'>Sair</a></span>";
                } else {
                    echo '<span class="cadastrar"><a href="cadastro.html"class="btn">Cadastrar</a></span>';
                }
            ?>

            <!--<div class="texto1">CONTATO</div>-->
      
            <?php
                echo '<div class="texto1">'.$_SESSION['nome_usuario'].'</div>';
            ?>

            <div class="texto2">Seja bem-vindo à nossa página!</div>
            <!--      
                <div class="topico1"><strong>Informações de Contato:</strong></div>   
                <div class="topico1-2">Telefone: (11) 4002-8922<br><br>
                    E-mail: atendimento@playtec.club<br><br>
                    Horário de Atendimento: Segunda à Sábado das 10:00 às 18:00</div>
                <div class="gif"></div>
            -->
    </div>
  </body>
</html>