<?php 

    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $descricao = $_POST["descricao"];
    $hora_inicio = $_POST["hora_inicio"];
    $hora_fim = $_POST["hora_fim"];
    $data_inicio = $_POST["data_inicio"];
    $data_final = $_POST["data_final"];
    $data_registro = $_POST["data_registro"];
    $hora_registro = $_POST["hora_registro"];


    include "../banco/conexao.php";
    
    $conn = conectar(); 

    $sql = "UPDATE solicitacoes SET nome='$nome', matricula= '$matricula', descricao='$descricao',
    hora_inicio='$hora_inicio',  hora_fim='$hora_fim', data_inicio='$data_inicio', data_final='$data_final',
    data_registro='$data_registro', hora_registro='$hora_registro' WHERE ID=$id_espaco;";

    $resultado = $conn->query($sql);
        if($resultado){
            desconectar($conn);
            header("Location: ../p_espacos.php");
            die();
            
        }else{
            desconectar($conn);
            echo "<p>Problema</p>";
        }

?>