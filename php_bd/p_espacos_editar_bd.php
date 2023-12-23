<?php 

    $id_espaco = $_POST["id_espaco_editado"];
    $nome_espaco = $_POST["nome_espaco_editado"];
    
    include "../banco/conexao.php";
    
    $conn = conectar();
    
    $sql = "UPDATE espacos SET NOME='$nome_espaco' WHERE ID=$id_espaco;";
    
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