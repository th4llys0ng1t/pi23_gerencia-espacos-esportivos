<?php 

    $matricula=$_POST['matricula'];
    $senha=$_POST['senha'];
    $senha_cripto=md5($senha);
    include "../banco/conexao.php";
    $conn=conectar();
    $sql="SELECT * FROM administradores WHERE MATRICULA = '$matricula' AND SENHA = '$senha_cripto'";
    $resultado=$conn -> query($sql);
    if ($resultado -> num_rows > 0) {
        while ($row=$resultado -> fetch_assoc) {
            session_start();
            $_SESSION["matricula"]=$row ["USUARIO"];

        }
        desconectar($conn);
        header("Location: ../perfil.php");
        die();
    }else{
        desconectar($conn);
        header("Location: ../autenticacao.php");
        die();
    }



?>