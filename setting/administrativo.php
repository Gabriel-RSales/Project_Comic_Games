<?php
    session_start();

    if(!empty($_SESSION['id'])){
					
	    echo "Olá ".$_SESSION['nome'].", seja bem-vindo(a) a Comic Games!";
	    echo "<a href='sair.php'> Sair </a>";
    }else{
        $_SESSION['msg'] = "Faça login novamente.";
        header("Location: ../Login.php");	
    }
?> 
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap-reboot.css">
        <link rel="stylesheet" href="../css/first.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>Comic Games | Home</title>  
    </head>
    <body>
        <header class="container bg">
            <div class="header">         
                <h1 class="logo">
                    <a href="administrativo.php">
                        <img src="../img/Logo.png" alt="Logo_Comic Games">
                    </a>
                </h1>

                <nav class="nav"><a href="#">Jogos</a></nav>
            </div>
        </header>

        <main class="container">
            <article class="main">
			
                <div class="text-box">
                    <h3 class="title">O que somos?</h3>
                    <p class="text">
                        Uma plataforma de jogos que busca tornar esse momento especial. Desenvolvemos os jogos Cara a Cara e Jogo da Velha para você se deleitar com seus amigos. Aqui a diversão é garantida!
                    </p>

                    <h3 class="title">O que priorizamos?</h3>
                    <div class="text">
                        <p>
                            Acreditamos que o trabalho em equipe é fundamental. Por isso, trabalhamos com muito empenho e determinação até chegarmos aqui. Conheça-nos mais:
                        </p>
                        <ul class="list">
                            <li>Débora Sophia de Souza Pinheiro</li>
                            <li>Gabriel William de Sales Reis</li>
                            <li>Karen Joilly Araújo Gregório de Almeida</li>
                            <li>Miguel Angelo dos Santos Evangelista</li>
                            <li>Victória Gabrielle Martins Lucas Flauzino</li>
                            <li>Vinícius Roberto Saúde Cruz</li> 
                        </ul>
                    </div>
                </div>
                
                <h2 class="title"> Aqui temos... </h2>
                <div class="text-box">
                    <h3 class="title">Jogos cômicos</h3>
                    <p class="text">
                        Nosso site disponibiliza dois jogos muito populares e divertidos: o Cara a Cara e o Jogo da Velha.
                    </p>
            
                    <h3 class="title">Possibilidade de jogar com amigos</h3>
                    <p class="text"> 
                        Ambos os jogos podem ser jogados entre, no máximo, duas pessoas. Chame seus amigos para jogar e descubra quem é o melhor!
                    </p>
                    
                    <h3 class="title">Personalização</h3>
                    <p class="text">
                        Nosso Cara a Cara é diferente da forma convencional. Ele utiliza os rostos dos seus personagens fictícios preferidos, além de permitir perguntas sobre os traços de suas personalidades, aumentando, assim, a dificuldade do jogo.
                    </p>
                    <div class="links">
                        <a href="../Login.php">Fazer Login</a></br>
                        <a href="../Cadastro.php">Fazer cadastro</a>
                </div>
                </div>
            </article>
        </main>

        <footer class="container bg">
            <div class="footer">
                <div class="logo_slogan">
                    <p class="logo">
                        <a href="administrativo.php">
                            <img src="../img/Logo.png" alt="Logo_Comic Games">
                        </a>
                    </p>

                    <p class="slogan">Divirta-se comicamente!</p>
                </div>
                
                <div class="contato">
                    <p>Atendimento</p>

                    <div class="divider"></div>

                    <ul class="social">
                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>