<?php
session_start();
ob_start();
$btn_cad = filter_input(INPUT_POST, 'btn_cad', FILTER_SANITIZE_STRING);

if($btn_cad){
	include_once ("setting/conexao.php");
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['usuario']. "',
					'" .$dados['senha']. "'
                )";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
        $_SESSION['msgcad'] = "Usuário cadastrado com sucesso!";
		header("Location: Login.php");
	}else{
        $_SESSION['msg'] = "Erro ao cadastrar o usuário";
	}
    mysqli_close($conn);
}
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
                <?php
			        if(isset($_SESSION['msg'])){
				        echo $_SESSION['msg'];
				        unset($_SESSION['msg']);
			        }
		        ?>
                <form action="" method="POST" class="form">
                    <div class="input-field form-floating">
                        <input name="nome" class="form-control" type="text" id="nome" placeholder="Escreva seu username">
                        <label for="nome">Nome</label>
                    </div>
                    
                    <div class="input-field form-floating">
                        <input name="email" class="form-control" type="text" id="email" placeholder="Escreva seu E-mail">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field form-floating">
                        <input type="text" name="usuario" placeholder="">
                        <label>Nome de usuário</label>
                     </div>

                    <div class="input-field form-floating">
                        <input name="senha" class="form-control" type="password" id="senha" placeholder="Digite sua senha">
                        <label for="senha">Senha</label>
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
    </body>
</html>