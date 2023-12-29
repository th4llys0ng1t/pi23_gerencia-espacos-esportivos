<?php 

<<<<<<< HEAD
    $id = $_POST["id"];
=======
>>>>>>> 822db47f38d61cfce8c59dd1a857ee14eec411b8
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $descricao = $_POST["descricao"];
    $hora_inicio = $_POST["hora_inicio"];
    $hora_fim = $_POST["hora_fim"];
    $data_inicio = $_POST["data_inicio"];
<<<<<<< HEAD
    $data_fim = $_POST["data_fim"];
    $espaco = $_POST["espaco"];
    
    include "../banco/conexao.php";
    
    $conn = conectar();
    
    $sql = "UPDATE solicitacoes SET NOME='$nome', MATRICULA='$matricula', 
    DESCRICAO='$descricao', DATA_INICIO='$data_inicio', HORA_INICIO='$hora_inicio', 
    DATA_FIM='$data_fim', HORA_FIM='$hora_fim'WHERE ID=$id;";
    
    $resultado = $conn->query($sql);
    if($resultado){
        desconectar($conn);
        header("Location: ../p_solicitacoes.php");
        die();
    }else{
        desconectar($conn);
        echo "<p>Problema</p>";
    }
=======
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
>>>>>>> 822db47f38d61cfce8c59dd1a857ee14eec411b8

?>