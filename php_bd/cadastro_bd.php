<?php 
    $usuario=$_POST['usuario'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $matricula=$_POST['matricula'];
    $senha_cripto=md5($senha);
    include "../banco/conexao.php";
    $conn=conectar();
    $sql = "INSERT INTO administrador (EMAIL, MATRICULA, USUARIO, SENHA)
    VALUES ('$email', '$matricula',' $usuario','$senha_cripto')";
    $resultado=$conn -> query($sql);
    if ($resultado) {
        desconectar($conn);
        header ("Location: ../autenticacao.php");
        die();
    }else{
        desconectar($conn);
        echo "Deu ruim meu nobre :(";
    }

?>