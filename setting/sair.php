<?php
    session_start();
    unset($_SESSION['user']);

    $_SESSION['msg'] = "Deslogado com sucesso.";
    header("Location: ../Login.php");
?>