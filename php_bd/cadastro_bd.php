<?php 

    //Recebendo as variaveis digitadas pelo o usuário
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];
    $usuario = $_POST["usuario"];
    $senha1 = $_POST["senha1"];
    $senha2 = $_POST["senha2"];

    //Criptando as senhas
    if($senha1 == $senha2){
        $senha1_cripto = md5($senha1);
    }else{
        echo "As senhas não são iguais";
    }

    //Incluindo a conexão de banco de dados
    include "../banco/conexao.php";

    //Conexão com o banco de dados
    $conn = conectar();

    //String de inserção dos administradores
    $sql = "INSERT INTO administrador (NOME, MATRICULA, USUARIO, SENHA, CONFIRMAR_SENHA)
    VALUES ('$nome', '$matricula', '$usuario', '$senha1', '$senha2')"

    //Executar isert
    $resultado = $conn -> query($sql);

    //Verificando se deu certo
    if($resultado){
        //Desconectar o banco
        desconectar($conn);
        //Redirecionamento para a página "login"
        header("Location ../php/autenticacao.php");
        die();
    }else{
        //Deu errado
        desconectar();
        echo "<p>Algo deu muito errado no seu cadastro</p>"

    }
?>