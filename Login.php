<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/first.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>Comic Games | Entrar</title>
    </head>

    <body>
        <header class="container bg">
            <div class="header">
                <h1 class="logo">
                    <a href="index.php">
                        <img src="img/Logo.png" alt="Logo_Comic Games">
                    </a>
                </h1>

                <nav class="nav"><a href="#">Jogos</a></nav>
            </div>
        </header>
            
        <main class="container">
            <div class="main forms">
                <h2 class="title-main">Entrar</h2>
                <?php
			        if(isset($_SESSION['msg'])){
				        echo $_SESSION['msg'];
				        unset($_SESSION['msg']);
			        }
			        if(isset($_SESSION['msgcad'])){
				        echo $_SESSION['msgcad'];
				        unset($_SESSION['msgcad']);
			        }
		        ?>
                <form action="setting/valida.php" method="POST" class="form">
                    <div class="input-field form-floating">
                        <input name="usuario" class="form-control" type="text" id="nome" placeholder="Escreva seu username">
                        <label for="nome">Nome de usuário</label>
                    </div>
        
                    <div class="input-field form-floating">
                        <input name="senha" class="form-control" type="password" id="senha" placeholder="Digite sua senha">
                        <label for="senha">Senha</label>
                    </div>
        
                    <div class="submit">
                        <input type="submit" name="btnLogin" value="Entrar"/>
                    </div>
                </form>
		</p>
		<p class="text-center text-success">
			
		</p>
                <div class="links">
                    <a href="EsqueciSenha.php">Esqueceu a sua senha?</a>
                    <a href="Cadastro.php">Fazer cadastro</a>
                </div>
            </div>
        </main>
        
        <footer class="container bg">
            <div class="footer">
                <div class="logo_slogan">
                    <p class="logo">
                        <a href="index.php">
                            <img src="img/Logo.png" alt="Logo_Comic Games">
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