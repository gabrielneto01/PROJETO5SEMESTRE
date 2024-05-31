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
       
    <title>Play Tec - Como funciona</title>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/maincomo.css">
 </head>
          
 <body>
    <div class=fundo>
      <!-- <div  class="logo2"></div>-->
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
        
      <div class="liu-kang"></div>
      <div class="texto1">COMO FUNCIONA</div>
      <div class="texto2">Bem-vindo ao nosso serviço de aluguel de jogos de mídia digital! Estamos empolgados em
        oferecer uma experiência única que permite aos nossos clientes desfrutarem de seus jogos
        favoritos de uma maneira flexível e conveniente. Saiba como funciona:</div>

      <div class="topico1"><strong>Passo 1: Escolha seu Jogo</strong></div>
        
      <div class="topico1-2">Navegue pela nossa extensa coleção de jogos e escolha aquele que desperta seu interesse. 
        Temos uma ampla variedade de títulos para atender a  todos os gostos e plataformas de 
        videogame.</div>
      
       <div class="topico2"><strong>Passo 2: Selecione a Duração do Aluguel</strong></div>
        
       <div class="topico2-2">Você decide por quanto tempo deseja aproveitar o jogo. Pode ser por alguns dias, uma semana ou até 
        mais, dependendo da sua preferência. A flexibilidade<br> está em suas mãos.</div>

        <div class="topico3"><strong>Passo 3: Faça o Pagamento</strong></div>
        
       <div class="topico3-2">Após escolher o jogo e a duração do aluguel, prossiga para o pagamento. Aceitamos várias formas de 
        pagamento para garantir a conveniência dos nossos clientes. Assim que o pagamento for confirmado,
        você estará pronto para a próxima etapa.</div>

        <div class="topico4"><strong>Passo 4: Receba seu Código de Aluguel</strong></div>
        
       <div class="topico4-2">Assim que o pagamento for processado com sucesso, um código exclusivo será gerado para o jogo alugado.
        Este código é a chave para desbloquear o jogo no seu console.</div>

        <div class="topico5"><strong>Passo 5:  Aproveite o Jogo</strong></div>
        
       <div class="topico5-2">É hora de mergulhar na diversão! Jogue o quanto quiser durante o período do seu aluguel.
        Nossos jogos oferecem uma experiência envolvente que certamente proporcionará horas de entretenimento.</div>

        <div class="topico6"><strong>Passo 6:  Jogo Bloqueado Automaticamente no Fim do Período</strong></div>
        
       <div class="topico6-2">Ao término do período de aluguel, o jogo será bloqueado automaticamente no seu console. Assim você
        terá uma experiência tranquila e sem complicações.</div>
      <div class="assine"><a href="cadastro.html" class="btn">ASSINE AGORA MESMO</a></div>
      <div  class="rodape"></div>
      <span  class="email_roda">atendimento@playtec.club</span>
      <span  class="contato">CONTATO</span>
      <span  class="hora_roda">Segunda à Sábado das 10:00 às 18:00</span>
      <span  class="num_roda">(11) 4002-8922</span>
      <div  class="logo_roda"></div>
      <div  class="img_hora"></div>
      <div  class="img_tel"></div>
      <div  class="img_carta"></div>
      <span  class="lista_roda"><a href="Lista.php" class="btn">Lista de Jogos</a></span>
      <span  class="como_roda"><a href="como.php" class="btn">Como Funciona</a></span>
      <span  class="cont_roda"><a href="contato.php" class="btn">Contato</a></span>
      <span  class="menu">MENU</span>
    </div>
  </body>
</html>