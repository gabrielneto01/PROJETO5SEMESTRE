<?php



session_start();

//print_r($_SESSION);

$nome = $_SESSION['nome_usuario'];

include("conexao.php");
//include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">

  <title> MORTAL KOMBAT 1 </title>
  <script src="funcoes11.js"></script>
  <link rel="stylesheet" href="./css/mainmk.css">

</head>
<body> <!--ok-->
    <div class=fundo> <!--ok-->
      <div  class="bmenu"></div> <!--ok-->
   <a href="index.php"><div class="logo"></div></a>
      <!--<div class="logo"></div>--> <!--ok-->
      <span class="list_jog"><a href="Lista.php" class="btn">Lista de Jogos</a></span><!--ok-->
      <span class="como_func"><a href="como.php" class="btn">Como Funciona</a></span> <!--ok-->
      <span class="contato"><a href="contato.php" class="btn">Contato</a></span> <!--ok-->
      <!--<span class="cadastrar"><a href="cadastro.html" class="btn">Cadastrar</a></span>--> <!--ok-->
      
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
                echo "<span class='cadastrar'><a href='deslogar.php' class='btn'>Sair</a></span>";
            } else {
                echo '<span class="cadastrar"><a href="cadastro.html"class="btn">Cadastrar</a></span>';
            }
        ?>
  <div  class="capamk"></div><!--ok-->
  <span  class="nome"> MORTAL KOMBAT 1 </span><!--ok-->
      <span  class="texto">A história de Mortal Kombat sempre envolveu disputas entre reinos por meio de um torneio no qual o 
        mundo perdedor poderia ser absorvido pelo mundo vencedor. Raiden e Shao Kahn travaram essa batalha por muitos anos nas 
        linhas do tempo anteriores à ascensão de Liu Kang como Deus do Fogo.</span><!--ok-->
      <div class="video"><iframe width="793" height="446" src="https://www.youtube.com/embed/Ue1Yo-3QnRc?si=MizCdSN_mGAAr3Vn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><!--ok-->
      <div  class="xone"></div>
      <div  class="xsx"></div>
      <div  class="ps4"></div><!--ok-->
      <div  class="ps5"></div><!--ok-->
      <?php
            if ($_SESSION['nome_usuario']){
                echo '<div class="bordae"></div>';
                echo '<div class="text_bord"><a href="../images/v401_7.png" download="GFG" class="btn"> DOWNLOAD </a></div>';
            }
      ?>
    <span  class="info">Lançamento: 2023<br>
        Desenvolvedor: NetherRealm Studios<br>
        Estudio:  Warner Bros. Games<br>
        </span><!--ok-->       
      <div  class="borda_novo_usuario"></div><!--ok--> 
      <div  class="novo_usuario"></div><!--ok--> 
  </body>
  </html>