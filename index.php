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

    <title>Play Tec - Página inicial</title>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet" />
    <link href="./css/main.css" rel="stylesheet" />
	<!-- <link rel="stylesheet" href="./css/styles.css"> -->
	
</head>

<body>

    <div class="fundo">
        <div class="logo"><a href="index.php"><img width="84px" height="84px"src="./images/v401_7.png"></a></div>
        <div class="list_jog"><a href="Lista.php" class="btn">Lista de Jogos</a></div>
        <span class="como_func"><a href="como.php" class="btn">Como Funciona</a></span>
        <span class="contato"><a href="contato.php" class="btn">Contato</a></span>
        <!--<span class="cadastrar"><a href="cadastro.html"class="btn"> Entrar </a></span>-->
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
                echo "<span class='cadastrar'><a href='Lista.php' class='btn'>Logado</a></span>";
            } else {
                echo '<span class="cadastrar"><a href="logar.php"class="btn">Entrar</a></span>';
            }
        ?>
       <div class="banner"></div>
        <span class="jogos_dest">Jogos em Destaque</span>
        <span class="novi">Novidades toda Sexta-feira!</span>
        <span class="como_func2">É fácil entender como funciona!</span>
        <span class="como_func3">Escolha o nosso plano e assine agora!</span>
        <div class="capa_god"></div>
        <div class="capa_fifa"></div>
        <div class="capa_spider"></div>
        <div class="capa_hogwarts"></div>
        <div class="capa_mortal"></div>
        <div class="capa_como"></div>
        <div class="ban_esquer"></div>
        <div class="ban_esquer2"></div>
        <div class="ban_esquer3"></div>
        <div class="ban_dire"></div>
        <div class="ban_dire2"></div>
        <div class="ban_dire3"></div>
        <span class="tex_ban_esquer">Pagamento exclusivo no pix<br>
            <br>¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨<br>
            <br>Escolha dois jogos disponíveis<br>
            <br>¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨<br>
            <br>  Até duas trocas por dia   <br>
            <br>¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨<br>
            <br>  Cancele quando desejar  <br>
            <br>¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨<br>
            <br>Jogos nível ouro e prata</span>
    </div>
    <div class="tex_ban_esquer2">OURO</div>
    <div class="tex_ban_esquer3">R$ 39,90</div>
    
    <?php
        if (!$_SESSION['nome_usuario']){
            
            echo '<div class="tex_ban_esquer4"><a href="logar.php"class="btn"> ASSINE AGORA </a></div>';
        }

    ?>
    
    <span class="tex_ban_dire">Pagamento exclusivo no boleto<br>
        <br>¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨<br>
        <br>Escolha um jogo disponível<br>
        <br>¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨<br>
        <br>  Até uma troca por dia   <br>
        <br>¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨<br>
        <br>  Cancele quando desejar  <br>
        <br>¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨<br>
        <br>Jogos nível prata</span>
</div>
<div class="tex_ban_dire2">PRATA</div>
<div class="tex_ban_dire3">R$ 19,90</div>
<?php
        if (!$_SESSION['nome_usuario']){
            
            echo '<div class="tex_ban_dire4"><a href="logar.php"class="btn"> ASSINE AGORA </a></div>';
        }

?>
<div class="rodape"></div>
<div class="logo_rodape"></div>
<div class="tex_menu_rodape">MENU</div>
<div class="tex_list_rodape"><a href="Lista.php" class="btn">Lista de Jogos</a></div>
<div class="tex_como_rodape"><a href="como.php" class="btn">Como Funciona</a></div>
<div class="tex_cont_rodape"><a href="contato.php" class="btn">Contato</a></div>
<div class="tex_contato_rodape">CONTATO</div>
<div class="tex_hora_rodape">Segunda à Sábado das 10:00 às 18:00</div>
<div class="img_hora_rodape"></div>
<div class="tex_tele_rodape">(11) 4002-8922</div>
<div class="img_tele_rodape"></div>
<div class="tex_mail_rodape">atendimento@playtec.club</div>
<div class="img_mail_rodape"></div>
</body>

</html>