<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title> TEC PLAY - Cadastro </title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="/css/main2.css"> -->
	<link href="./css/main2.css" rel="stylesheet" />

    <style>
        body {
            background: rgb(32, 32, 32);
        }
    </style>

</head>

<body>
    <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
    <div class="borda_fim">
        <!-- <div class="logo"><a href="index.html"><img img width="100px" height="100px"src="./images/v401_7.png"></a></div> -->
		<div class="logo"><a href="index.php"><img width="84px" height="84px"src="./images/v401_7.png"></a></div>
        <span class="list"><a href="Lista.php"class="btn"> Lista de Jogos </a></span>
        <span class="funci"><a href="como.php"class="btn"> Como Funciona </a></span>
        <span class="contato"><a href="contato.php"class="btn"> Contato </a></span>
        <span class="entrar"><a href="index.php" class="btn">Home</a></span> 
        
       </div>
       
        <div class="Cadastro">
    </div>    <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
            
     <br> <br> <br> <br> <br> <br>
            <!-- Início do formulário -->
            <form method="post" name="logar" id="logar" action="logando.php">
               
					<!-- Campo de email com-->
				<fieldset class="grupo">
					<div class="email">
						<label for="sobrenome"><strong >E-mail</strong></label>
						<input type="email" name="email" id="email" required>
					</div>
				</fieldset> 
				<fieldset class="grupo">
					<!-- Campo do nome com legenda "nome" e css de classe "campo" -->
					<div class="campo">
						<label for="nome"><strong>Senha </strong></label>
						<input type="password" name="senha" id="senha" required>
					</div>
				</fieldset> 
                <span class="btn"><a href="cadastro.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caso ainda não tenha cadastro clique aqui!</a></span>
            
                <!-- Caixa de texto -->
				<br><br>
                <button class="btn third" type="submit" id="btnCadastro"><strong>LOGAR</strong></button>
				<!-- <button class="btn third" type="submit" id="Submit" >Cadastro</button> -->
            </form>
          
            <script src="scripts.js"></script>
        </body>
    
    </html>