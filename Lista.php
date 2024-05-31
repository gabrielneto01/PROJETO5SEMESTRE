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
       
    <title>Play Tec - Lista de jogos</title>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    
    	<style>
        .marquee-container {
          width: 100%;
          overflow: hidden;
        }

        .marquee {
          white-space: nowrap;
          animation: marquee 10s linear infinite;
          color: white;
          font-weight: bold; 
        }

        @keyframes marquee {
          0%   { transform: translateX(100%); }
          100% { transform: translateX(-100%); }
        }
    </style>
    
 </head>
          
 <body>
    <div class=fundo>
	<!-- <div  class="logo2</div> -->
	  <a href="index.php"><div  class="logo2"></div></a>
      <!-- <div  class="logo2"><a href="index.html"><img img width="100px" height="100px"src="./images/v401_7.png"></div> -->
	  <!-- <div class="logo"><a href="index.html"><img img width="100px" height="100px"src="./images/v401_7.png"></a></div> -->
      <span  class="lista"><a href="Lista.php" class="btn">Lista de Jogos</a></span>
      <span  class="como"><a href="como.php" class="btn">Como Funciona</a></span>
      <span  class="cont"><a href="contato.php" class="btn">Contato</a></span>
      
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
                
                echo '<div class="texto1">'.$_SESSION['nome_usuario'].'</div>';

                echo    '<div class="texto2">Seja bem-vindo! escolha seu jogo abaixo.</div>';
                
                
            } else {
                echo '<span class="cadastrar"><a href="cadastro.html"class="btn">Cadastrar</a></span>';
            }
        ?>
        
   
      
      
      <!--<span  class="cadastrar"> -->
        <!--Link para a tela de cadastro -->
       <!-- <a href='cadastro.html' class="btn">Entrar</a> --> 
      <!--</span> --> 
      <div class="banner"><div class="marquee-container"><div class="marquee" id="proximoFeriado"></div></div></div>
       <script>
    
            // Fazendo a solicitação HTTP GET para a API de feriados
        fetch('https://brasilapi.com.br/api/feriados/v1/2024')
            .then(response => response.json())
            .then(data => {
                // Encontrando o próximo feriado
                const feriados = data;
                const hoje = new Date();
                let proximoFeriado;
                for (let feriado of feriados) {
                    const dataFeriado = new Date(feriado.date);
                    if (dataFeriado > hoje) {
                        proximoFeriado = feriado;
                        break;
                    }
                }

                // Exibindo o próximo feriado no elemento marquee
                if (proximoFeriado) {
                    const proximoFeriadoElement = document.getElementById('proximoFeriado');

                  // convertendo a data para formato brasileiro
                  let data_americana = proximoFeriado.date;
                  let data_brasileira = data_americana.split('-').reverse().join('/');
                  proximoFeriado.date = data_brasileira;
               
                  
                    proximoFeriadoElement.textContent = `Próximo feriado: ${proximoFeriado.name} - ${proximoFeriado.date} `+' Aproveite para jogar!';
                  
                } else {
                    const proximoFeriadoElement = document.getElementById('proximoFeriado');
                    proximoFeriadoElement.textContent = "Não há próximos feriados.";
                }
            })
            .catch(error => {
                console.error('Erro ao obter feriados:', error);
            });
            
       // Opcional: Adicione este código se quiser pausar a animação quando o mouse passar por cima
document.querySelector('.marquee-container').addEventListener('mouseenter', function() {
    this.querySelector('.marquee').style.animationPlayState = 'paused';
});

document.querySelector('.marquee-container').addEventListener('mouseleave', function() {
    this.querySelector('.marquee').style.animationPlayState = 'running';
});     
            
            
            
    </script>
       
     <!--<div  class="fc">-->
      <!--Link para o fifa 24 -->
        <a href="fifa.php">
          <img  class="fc" src="images/fifa_24.png" alt="">
                </a>
      <!--</div>-->
      <!--<div  class="spider">-->
        <!--Link para o spiderman 2 -->
            <a href="spider.php">
                <img class="spider" src="images/spider_man_2.png" alt="">
            </a>
     <!-- </div> -->
      <!--<div  class="gta">-->
        <!--Link para o gta 6 -->
        <a href="gta.php">
          <img class="gta" src="images/gta_6.png" alt="">
                </a>
      <!--</div>-->
      <div  class="em_breve"></div>
      <!--<div  class="gow">-->
        <!--Link para o god of war -->
        <a href="god.php">
          <img class="gow" src="images/god.png" alt="">
                </a>
      <!--</div>-->
      <!--<div  class="star">-->
        <!--Link para o starfield -->
        <a href="pinoquio.php">
          <img class="star" src="images/capa_pi.png" alt="">
                </a>
      <!--</div>-->
      <!--<div  class="hog">-->
        <!--Link para o hogwarts -->
        <a href="hogwarts.php">
          <img class="hog" src="images/hogwarts.png" alt="">
                </a>
      <!--</div>-->
     <!-- <div  class="cod">-->
        <!--Link para o call of duty -->
        <a href="cod.php">
          <img class="cod" src="images/cod.png" alt="">
                </a>
      <!--</div>-->
     <!-- <div  class="mk1">
        <!--Link para o mortal kombat 1 -->
        <a href="mk1.php">
          <img class="mk1" src="images/mk1.png" alt="">
                </a>
      <!--</div>-->
      <!--<div  class="alan">
        <!--Link para o alan wake -->
        <a href="alan.php">
          <img class="alan" src="images/alan_wake.png" alt="">
                </a>
      <!--</div>-->
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