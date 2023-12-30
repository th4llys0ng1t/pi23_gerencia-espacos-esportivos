<?php 

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $descricao = $_POST["descricao"];
    $hora_inicio = $_POST["hora_inicio"];
    $hora_fim = $_POST["hora_fim"];
    $data_inicio = $_POST["data_inicio"];
    $data_fim = $_POST["data_fim"];
    $espaco = $_POST["espaco"];

    include "../banco/conexao.php";

    $conn = conectar();

    $sql = "UPDATE solicitacoes SET NOME='$nome', MATRICULA='$matricula', 
    DESCRICAO='$descricao', DATA_INICIO='$data_inicio', HORA_INICIO='$hora_inicio',
    DATA_FIM='$data_fim', HORA_FIM='$hora_fim', ID_ESPACO=$espaco
    WHERE ID=$id;";

    $resultado = $conn->query($sql);

    if($resultado){
        desconectar($conn);
        header("Location: ../p_solicitacoes.php");
        die();
    }else{
        desconectar($conn);
        echo "<p>Problema</p>";
    }

?>