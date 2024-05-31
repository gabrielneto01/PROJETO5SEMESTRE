<?php



session_start();

print_r($_SESSION);

$nome = $_SESSION['nome_usuario'];

//include("conexao.php");
//include 'conexao.php';
?>

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
                //echo "<span class='cadastrar'><a href='logado.php' class='btn'> ".$_SESSION['nome_usuario']."</a><br><a href='deslogar.php'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sair</a></span>";
                echo "<span class='cadastrar'><a href='logado.php' class='btn'>Logado</a></span>";
            } else {
                echo '<span class="cadastrar"><a href="cadastro.html"class="btn">Cadastrar</a></span>';
            }
        ?>

      <div class="texto1">CONTATO</div>

      <div class="texto2">Seja bem-vindo à nossa página de contato! Estamos empolgados em ouvir de você e responder a todas 
        as suas perguntas. Sua opinião é fundamental para nós, sinta-se à vontade para entrar em contato pelos 
        meios listados abaixo. Nossa equipe está pronta para ajudar.</div>
      
      <div class="topico1"><strong>Informações de Contato:</strong></div>   
      <div class="topico1-2">Telefone: (11) 4002-8922<br><br>
        E-mail: atendimento@playtec.club<br><br>
        Horário de Atendimento: Segunda à Sábado das 10:00 às 18:00</div>
      <div class="gif"></div>
    </div>
  </body>
</html>