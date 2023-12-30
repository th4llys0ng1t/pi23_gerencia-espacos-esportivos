<?php 
    //Receber dados do formulário
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $descricao = $_POST["descricao"];
    $hora_inicio = $_POST["hora_inicio"];
    $hora_fim = $_POST["hora_fim"];
    $data_inicio = $_POST["data_inicio"];
    $data_final = $_POST["data_final"];
    $data_registro = $_POST["data_registro"];
    $hora_registro = $_POST["hora_registro"];
    $id_espaco = $_POST["espaco"];

    include "../banco/conexao.php";

    $conn = conectar();

    $sql = "INSERT INTO solicitacoes(NOME, MATRICULA, DESCRICAO, DATA_INICIO, HORA_INICIO, 
    DATA_FIM, HORA_FIM, DATA_REGISTRO, HORA_REGISTRO, ID_ESPACO) VALUES ('$nome', '$matricula', '$descricao'
    ,'$data_inicio', '$hora_inicio', '$data_final', '$hora_fim', '$data_registro', '$hora_registro', $id_espaco);";

    $resultado = $conn->query($sql);

    if($resultado){
        // Recuperar o ID do núcleo que foi gerado do núcleo cadastrado
        $id_solicitacao = $conn->insert_id;

        desconectar($conn);
        header("Location: ../p_solicitacoes.php");
        die();
    }else{
        desconectar($conn);
        echo "<p>Problema</p>";
    }

?>