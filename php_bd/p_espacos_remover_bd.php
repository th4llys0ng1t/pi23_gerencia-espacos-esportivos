<?php 
    $id = $_GET["id"];

    include "../banco/conexao.php";
    
    $conn = conectar();
    
    $sql = "DELETE FROM espacos WHERE ID=$id;";
    
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