<?php
	session_start();

	include_once("conexao.php");

	$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

	if($btnLogin){
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

		if((!empty($usuario)) AND (!empty($senha))){
			//Gerar a senha criptografa
			//echo password_hash($senha, PASSWORD_DEFAULT);
			//Pesquisar o usuário no BD

			$result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
			$resultado_usuario = mysqli_query($conn, $result_usuario);

			if($resultado_usuario){
				$row_usuario = mysqli_fetch_assoc($resultado_usuario);
				mysqli_close($conn);

				if(password_verify($senha, $row_usuario['senha'])){
					$_SESSION['user'] = $row_usuario;
					header("Location: ../index.php");
				}else{
					$_SESSION['msgerr'] = "Login e senha incorreto!";
					header("Location: ../Login.php");
				}
			}
		}else{
			$_SESSION['msgerr'] = "Login e senha incorreto!";
			header("Location: ../Login.php");
		}
	} 
?>