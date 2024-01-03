<?php 

    //recolhendo os dados do usuário
    $usuario=$_POST['usuario'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $matricula=$_POST['matricula']; 

    //criptando a senha
    $senha_cripto=md5($senha);
    
    //incluindo a conexão com o banco de dados
    include "../banco/conexao.php";
    
    $conn=conectar();

    //SQL de inserção no banco de dados
    $sql = "INSERT INTO administrador (EMAIL, MATRICULA, USUARIO, SENHA)
    VALUES ('$email', '$matricula',' $usuario', '$senha_cripto')";

    $resultado=$conn -> query($sql);

    //teste de erro o acerto
    if ($resultado) {
        desconectar($conn);
        header ("Location: ../autenticacao.php");
        die();
    }else{
        desconectar($conn);
        echo "Deu ruim meu nobre :(";
    }

?>