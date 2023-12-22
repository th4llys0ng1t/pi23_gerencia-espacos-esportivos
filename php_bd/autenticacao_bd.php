<?php 
    
    //recolhendo os dados digitados pelo usuário
    $matricula=$_POST['matricula'];
    $senha=$_POST['senha'];

    //criptando a senha
    $senha_cripto=md5($senha);

    //incluindo a conexão com o banco de dados
    include "../banco/conexao.php";

    $conn=conectar();

    //SQL de inserção no banco
    $sql="SELECT * FROM administrador WHERE MATRICULA = '$matricula' AND SENHA = '$senha_cripto'";
    $resultado=$conn -> query($sql);
    
    //teste de acerto ou erro
    if ($resultado -> num_rows > 0) {
        while ($row=$resultado -> fetch_assoc()) {
            if(session_id() == '')
                session_start();
                $_SESSION["matricula"] = $row["USUARIO"];
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