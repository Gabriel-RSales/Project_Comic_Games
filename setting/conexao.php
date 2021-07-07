<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "comic games";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Conexão bem sucedida.";
	//mysqli_close($conn);
?>