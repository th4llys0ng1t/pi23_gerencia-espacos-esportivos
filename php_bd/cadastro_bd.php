<?php  

    if(isset ($_POST["cadastro"])){
        //Recebendo as variaveis digitadas pelo o usuário
        $email = $_POST["email"];
        $matricula = $_POST["matricula"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        //Criptando as senhas
        $senha_cripto = md5($senha);
     
        //Incluindo a conexão de banco de dados
        include "../banco/conexao.php";

        //Conexão com o banco de dados
        $conn = conectar();

        //String de inserção dos administradores
        $sql = "INSERT INTO administrador (EMAIL, MATRICULA, USUARIO, SENHA)
        VALUES ('$email', '$matricula', '$usuario', '$senha')"

        //Executar insert
        $resultado = $conn -> query($sql);

        //Verificando se deu certo
        if($resultado){
            //Desconectar o banco
            desconectar($conn);
            //Redirecionamento para a página "login"
            header("Location: ../php/autenticacao.php");
            die();
        }else{
            //Deu errado
            desconectar();
            echo "<p>Algo deu muito errado no seu cadastro</p>"
        }
    }
    
?>