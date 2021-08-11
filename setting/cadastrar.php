<?php
    session_start();
    ob_start();
    
    $btn_cad = filter_input(INPUT_POST, 'btn_cad', FILTER_SANITIZE_STRING);
    
    if($btn_cad){
        include_once("conexao.php");
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        $err = false;
        $dados = array_map('trim', array_map('strip_tags', $dados));
        
        if(in_array('', $dados)) {
            $err = true;
        } else if(
            strtolower($dados['senha']) == $dados['senha'] ||
            ctype_alpha($dados['senha']) || 
            (!ctype_alnum($dados['senha']) && !(stripos($dados['senha'], "@") !== false || stripos($dados['senha'], "_") !== false || stripos($dados['senha'], "-") !== false)) ||
            strlen($dados['senha']) < 6) {
                $err = true;
        } else {
            $if_exist_user = mysqli_query($conn, "SELECT id FROM usuarios WHERE usuario='". $dados['usuario'] ."'");
            if($if_exist_user->num_rows != 0) {
                $_SESSION['userexists'] = "Usuário já existe!";
                $err = true;
            } 
            $if_exist_email = mysqli_query($conn, "SELECT id FROM usuarios WHERE email='". $dados['email'] ."'");
            if($if_exist_email->num_rows != 0) {
                $_SESSION['emailexists'] = "Você já pussui uma conta!";
                $err = true;
            } 
        }
        
        if(!$err) {     
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
                $_SESSION['msgtitle'] = "Cadastrado";
                //header("Location: ../Login.php");
            }
        } else{
            $_SESSION['msgerr'] = "Erro ao cadastrar o usuário!";
            header("Location: ../Cadastro.php");
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
        <link rel="stylesheet" href="../css/bootstrap-reboot.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/first.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>
            Comic Games | <?php if(isset($_SESSION['msgtitle'])) { echo $_SESSION['msgtitle']; unset($_SESSION['msgtitle']); }?>
        </title>
    </head>

    <body>
        <header class="container bg">
            <div class="header">
                <h1 class="logo">
                    <a href="../index.php">
                        <img src="../img/Logo.png" alt="Logo_Comic Games">
                    </a>
                </h1>

                <nav class="nav"><a href="#">Jogos</a></nav>
            </div>
        </header>
        
        <main class="container">
            <div class="main">
                <?php if(isset($_SESSION['msgcad'])): ?>
                    <h2 class="title-main"> <?php echo $_SESSION['msgcad']; unset($_SESSION['msgcad']);?> </h2>
                    <div class="text-box links">
                        <p>Deseja</p>
                        <a href="../Login.php">Entrar!</a>
                    </div>
                <?php endif ?>
            </div>
        </main>
        
        <footer class="container bg">
            <div class="footer">
                <div class="logo_slogan">
                    <p class="logo">
                        <a href="../index.php">
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