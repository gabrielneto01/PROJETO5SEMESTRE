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

  <title> LIES OF P </title>
  <script src="funcoes11.js"></script>
  <link rel="stylesheet" href="./css/mainpi.css">

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
  <div  class="capapi"></div><!--ok-->
  <span  class="nome">LIES OF P</span><!--ok-->
      <span  class="texto">Lies of P é um jogo RPG de ação desenvolvido pela Round8 Studio e publicado pela Neowiz Games, 
        inspirado no romance de Carlo Collodi As Aventuras de Pinóquio. Lançado para Microsoft Windows, PlayStation 4, PlayStation 5, 
        Xbox One e Xbox Series X/S em 2023.</span><!--ok-->
      <div class="video"><iframe width="793" height="446" src="https://www.youtube.com/embed/pVnVNGKEufk?si=v6RjTHCSC-hda7nD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><!--ok-->
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
        Desenvolvedor: Neowiz Games, Round 8 Studio<br>
        Estudio:  Neowiz Games, Sold Out Sales & Marketing Ltd<br>
        </span><!--ok-->       
      <div  class="borda_novo_usuario"></div><!--ok--> 
      <div  class="novo_usuario"></div><!--ok--> 
  </body>
  </html>