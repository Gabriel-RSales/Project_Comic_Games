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
        <title>Comic Games | Cadastro</title>
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
                <h2 class="title-main">Fazer Cadastro</h2>
                <form action="setting/cadastrar.php" method="POST" class="form validation" novalidate>
                    <div class="input-field form-floating">
                        <input name="nome" class="form-control" type="text" id="nome" placeholder="Escreva seu username" required>
                        <label for="nome">Nome</label>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="input-field form-floating">
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nome de usuário" required>
                        <label for="usuario">Nome de usuário</label>
                        <div class="invalid-feedback"></div>
                     </div> 
                    
                    <div class="input-field form-floating">
                        <input name="email" class="form-control" type="text" id="email" placeholder="Escreva seu E-mail" required>
                        <label for="email">Email</label>
                        <div class="invalid-feedback"></div>
                    </div>


                    <div class="input-field form-floating divPassword">
                        <input name="senha" class="form-control" type="password" id="senha" placeholder="Digite sua senha" required>
                        <label for="senha">Senha</label>
                        <div class="invalid-feedback"></div>
                    </div>
                    
                    <div class="submit">
                        <input type="submit" name="btn_cad" value="Cadastrar"/>
                    </div>
                </form>
                <div class="links">
                    <a href="Login.php">Fazer login</a>
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
        <script type="text/javascript" src="js/validateForms.js"></script>
    </body>
</html>